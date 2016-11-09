<?php

namespace src\Addresses\Services;

interface AddressesServiceInterface
{
    /**
     * @param int $id
     * @return array
     */
    public function getAddress($id);

    /**
     * @return array
     */
    public function getAddresseses();

    /**
     * @param string $name
     * @param string $telephone
     * @param string $address
     * @return array
     */
    public function createAddress($name, $telephone, $address);

    /**
     * @param int $id
     * @return bool
     */
    public function deleteAddress($id);
}
