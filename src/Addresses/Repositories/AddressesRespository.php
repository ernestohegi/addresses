<?php

namespace src\Addresses\Repositories;

use src\Addresses\Services\DatabaseServiceInterface;

class AddressesRepository implements AddressesRepositoryInterface
{
    private $database;

    private $table;

    private $entity;

    public function __construct(
        DatabaseServiceInterface $database,
        $table,
        $entity
    ) {
        $this->database = $database;
        $this->table = $table;
        $this->entity = $entity;

        $this->database->setTable($this->table);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress($id)
    {
        return $this->database->selectWithEntity(
            ['id', 'name', 'telephone', 'address'],
            $id,
            $this->entity
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getAddresseses()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function createAddress($name, $telephone, $address)
    {
        return $this->database->create([
            'name' => $name,
            'telephone' => $telephone,
            'address' => $address
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAddress($id)
    {

    }
}
