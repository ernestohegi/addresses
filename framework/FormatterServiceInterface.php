<?php

namespace framework\Services;

interface FormatterServiceInterface
{
    public function format(array $data);

    public function convert(array $data);
}
