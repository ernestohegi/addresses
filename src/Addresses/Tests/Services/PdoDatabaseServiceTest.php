<?php

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use src\Addresses\Entities\AddressEntity as Address;
use src\Addresses\Services\PdoDatabaseService;

class PdoDatabaseServiceTest extends TestCase
{
    const DATABASE_HOST = '127.0.0.1';
    const DATTABASE_NAME = 'addresses_test';
    const DATABASE_USER = 'root';
    const DATABASE_PASSWORD = '1234';

    private $database;

    public function setUp()
    {
        $this->database = new PdoDatabaseService(
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

    public function testCreateAndSelect()
    {
        $fields = [
            'name' => 'Tester 1',
            'telephone' => '123123',
            'address' => 'Fake 123',
        ];

        $this->database->setTable('addresses');

        $addressId = $this->database->create($fields);

        // Test create
        $this->assertTrue($addressId > 0);

        $fetchedAddress = $this->database->selectWithEntity(['id', 'name', 'telephone', 'address'], $addressId, Address::class);

        // Test select
        $this->assertEquals($addressId, $fetchedAddress->getId());
        $this->assertEquals($fields['name'], $fetchedAddress->getName());
        $this->assertEquals($fields['telephone'], $fetchedAddress->getTelephone());
        $this->assertEquals($fields['address'], $fetchedAddress->getAddress());
    }
}
