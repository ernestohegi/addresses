<?php

namespace src\Addresses\Controllers;

use src\Addresses\Services\AddressesServiceInterface;

class AddressController
{
    private $addressesService;

    private $formatterService;

    public function __construct(
        AddressesServiceInterface $addressesService,
        FormatterServiceInterface $formatterService
    ) {
        $this->addressesService = $addressesService;
        $this->formatterService = $formatterService;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddress($id)
    {
        return $this->formatterService(
            $this->$addressesService->getAddress($id)
        );
    }

    /**
     * {@inheritdoc}
     */
    public function createAddress()
    {
        return $this->formatterService(
            $this->$addressesService->createAddress()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function updateAddress()
    {
        return $this->formatterService(
            $this->$addressesService->updateAddress()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAddress($id)
    {
        return $this->formatterService(
            $this->$addressesService->deleteAddress()
        );
    }
}
