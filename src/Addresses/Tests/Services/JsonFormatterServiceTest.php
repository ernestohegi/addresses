<?php

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Addresses\Services\JsonFormatterService;

class JsonFormatterServiceTest extends TestCase
{
    private $jsonFormatterService;

    public function setUp()
    {
        $this->jsonFormatterService = new JsonFormatterService();
    }

    public function testEncoder()
    {
        var_dump($this->jsonFormatterService->encode(['hello']));
    }

    public function testDecoder()
    {
    }
}
