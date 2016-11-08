<?php

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Addresses\Services\DatabaseService;

class DatabaseServiceTest extends TestCase
{
    const DATABASE_HOST = '127.0.0.1';
    const DATTABASE_NAME = 'addresses';
    const DATABASE_USER = 'root';
    const DATABASE_PASSWORD = '1234';

    private $database;

    public function setUp()
    {
        $this->database = new DatabaseService(
            self::DATABASE_HOST,
            self::DATTABASE_NAME,
            self::DATABASE_USER,
            self::DATABASE_PASSWORD
        );
    }

    public function testDatabaseConnection()
    {
        $this->assertNotNull($this->database);
    }

    public function testCreate()
    {

    }
}
