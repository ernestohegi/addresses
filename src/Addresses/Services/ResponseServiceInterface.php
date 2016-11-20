<?php

namespace src\Addresses\Services;

interface ResponseServiceInterface
{
    /**
     * @param array $content response content
     * @param string $format response format e.g.: json, xml, etc
     */
    public function sendResponse(array $content, $format);
}
