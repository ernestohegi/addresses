<?php

namespace Addresses\Services;

require realpath(dirname(__FILE__)) . '/../../../autoloader.php';

use PDO;

class PdoDatabaseService implements DatabaseServiceInterface
{
    private static $connection;

    private $table;

    public function __construct($host, $database, $user, $password)
    {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO(
                    "mysql:host=$host;dbname=$database",
                    $user,
                    $password
                );

                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * {@inheritdoc}
     */
    public function selectWithEntity(array $fields, $id, $entity)
    {
        $handler = self::$connection->query('SELECT ' . implode(',', $fields) . ' from ' . $this->table . ' where id = ' . $id);
        $handler->setFetchMode(PDO::FETCH_CLASS, $entity);
        return $handler->fetch();
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        $insertId = 0;
        $insertQueryData = $this->getInsertQueryData($data);

        $handle = self::$connection->prepare(
            $insertQueryData['query']
        );

        try {
            $handle->execute($insertQueryData['params']);
            $insertId = self::$connection->lastInsertId();
        } catch (Exception $e) {
            var_dump($e);
        }

        return $insertId;
    }

    private function getInsertQueryData(array $data)
    {
        $sql = 'INSERT INTO ' . $this->table . ' SET ';
        $params = [];
        $placeholderKey = '';
        $insertSeparator = ', ';

        foreach ($data as $key => $value) {
            $placeholderKey = ':' . $key;
            $sql .= $key . ' = ' . $placeholderKey . $insertSeparator;
            $params[$placeholderKey] = $value;
        }

        $sql = substr($sql, 0, strlen($insertSeparator));

        return [
            'query' => $sql,
            'params' => $params
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function update($id)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {
    }
}
