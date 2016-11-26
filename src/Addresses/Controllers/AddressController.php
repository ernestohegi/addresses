<?php

namespace src\Addresses\Controllers;

use src\Addresses\Services\AddressesServiceInterface;

class AddressController
{
    private $addressesService;

    private $responseService;

    public function __construct(
        AddressesServiceInterface $addressesService,
        ResponseServiceInterface $responseService
    ) {
        $this->addressesService = $addressesService;
        $this->responseService = $responseService;
    }

    /**
     * @method get
     *
     * @param int    $id     address id
     * @param string $format response format
     */
    public function getAddress($id, $format)
    {
        return $this->responseService->sendResponse(
            $this->$addressesService->getAddress($id),
            $format
        );
    }

    /**
     * @method post
     *
     * @param string $format response format
     */
    public function createAddress($format)
    {
        return $this->responseService->sendResponse(
            $this->$addressesService->createAddress(),
            $format
        );
    }

    /**
     * @method put
     *
     * @param int    $id     address id
     * @param string $format response format
     */
    public function updateAddress($id, $format)
    {
        return $this->responseService->sendResponse(
            $this->$addressesService->updateAddress($id),
            $format
        );
    }

    /**
     * @method delete
     *
     * @param int    $id     address id
     * @param string $format response format
     */
    public function deleteAddress($id, $format)
    {
        return $this->responseService->sendResponse(
            $this->$addressesService->deleteAddress($id),
            $format
        );
    }
}
