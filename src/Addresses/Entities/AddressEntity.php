<?php

namespace Addresses\Entities;

class AddressEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $address;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        return $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        return $this->address = $address;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        return $this->telephone = $telephone;
    }
}
