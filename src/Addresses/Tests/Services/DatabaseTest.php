<?php

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Addresses\Vendor\Database;

class DatabaseTest extends TestCase
{
    private $database;

    public function setUp()
    {
        $this->database = new Database();
    }

    public function testDatabaseConnection()
    {
        $this->assertNotEmpty($this->database);
    }
}
