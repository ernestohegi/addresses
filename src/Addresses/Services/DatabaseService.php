<?php

namespace Addresses\Services;

use PDO;

class DatabaseService implements DatabaseServiceInterface
{
    private static $connection;

    public function __construct($host, $database, $user, $password)
    {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO(
                    "mysql:host=$host;dbname=$database",
                    $user,
                    $password
                );
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
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
