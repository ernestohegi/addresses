<?php

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use src\Addresses\Repositories\AddressesRepository;
use src\Addresses\Services\AddressesService;
use src\Addresses\Services\PdoDatabaseService;

class AddressesServiceTest extends TestCase
{
    const DATABASE_HOST = '127.0.0.1';
    const DATTABASE_NAME = 'addresses_test';
    const DATABASE_USER = 'root';
    const DATABASE_PASSWORD = '1234';

    private $database;
    private $addressRepository;

    public function setUp()
    {
        $this->database = new PdoDatabaseService(
            self::DATABASE_HOST,
            self::DATTABASE_NAME,
            self::DATABASE_USER,
            self::DATABASE_PASSWORD
        );

        $this->addressRepository = new AddressesRepository(
            $this->database,
            'addresses',
            'Addresses\Entities\AddressEntity'
        );

        $this->addressService = new AddressesService(
            $this->addressRepository
        );
    }

    public function testGetAndCreateAddress()
    {
        $addressName = 'Tester'.uniqid();
        $addressTelephone = uniqid();
        $addressAddress = uniqid();

        $addressId = $this->addressService->createAddress(
            $addressName,
            $addressTelephone,
            $addressAddress
        );

        $this->assertTrue($addressId > 0);

        $address = $this->addressService->getAddress($addressId);

        $this->assertEquals($addressId, $address->getId());
        $this->assertEquals($addressName, $address->getName());
        $this->assertEquals($addressTelephone, $address->getTelephone());
        $this->assertEquals($addressAddress, $address->getAddress());
    }
}
