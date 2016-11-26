<?php

namespace src\Addresses\Services;

use src\Addresses\Repositories\AddressesRepositoryInterface;

class AddressesService implements AddressesServiceInterface
{
    private $addressRepository;

    public function __construct(
        AddressesRepositoryInterface $addressRepository
    ) {
        $this->addressRepository = $addressRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress($id)
    {
        return $this->addressRepository->getAddress($id);
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
        return $this->addressRepository->createAddress(
            $name,
            $telephone,
            $address
        );
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAddress($id)
    {
    }
}
