<?php

namespace src\Addresses\Services;

interface FormatterServiceInterface
{
    public function format(array $data);

    public function convert(array $data);
}
