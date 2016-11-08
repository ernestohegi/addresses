<?php

namespace Addresses\Services;

use PDO;

class DatabaseService implements DatabaseServiceInterface
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
    public function select(array $fields)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        $sql = 'INSERT INTO ' . $this->table . ' SET ';
        $params = [];

        foreach ($data as $key => $value) {
            $sql .= $key . ' = :' . $key . ', ';
            $params[':' . $key] = $value;
        }

        $sql = substr($sql, 0, -2);

        $handle = self::$connection->prepare($sql);

        try {
            $handle->execute($params);
        } catch (Exception $e) {
            var_dump($e);
        }
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
