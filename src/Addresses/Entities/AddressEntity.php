<?php

namespace src\Addresses\Entities;

class AddressEntity
{
    private $id;

    private $name;

    private $telephone;

    private $address;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setAddress($address)
    {
        return $this->address = $address;
    }

    public function setTelephone($telephone)
    {
        return $this->telephone = $telephone;
    }
}
