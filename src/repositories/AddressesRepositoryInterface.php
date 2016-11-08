<?php

namespace Addresses\Repositories\AddressesRepositoryInterface;

interface AddressesRepositoryInterface
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
     * @param string $code
     * @param string $address
     * @return array
     */
    public function createAddress($name, $code, $address);

    /**
     * @param int $id
     * @return bool
     */
    public function deleteAddress($id);
}
