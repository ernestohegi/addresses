<?php

namespace Addresses\Vendor\Database;

class Database implements DatabaseInteface
{
    private $connection;

    public function __construct($host, $database, $user, $password)
    {
        if ($this->connection === null) {
            // Connect
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
