<?php

namespace Addresses\Services;

class FormatterService
{
    private $jsonFormatter;

    private $xmlFormatter;

    public function __construct(
        FormatterInterface $formatterService,
        FormatterInterface $xmlFormatter
    ) {
        $this->jsonFormatter = $jsonFormatter;
        $this->xmlFormatter = $xmlFormatter;
    }

    public function getFormatter($format) {
        $formatter = new stdClass();

        switch ($format) {
            case self::JSON_FORMAT:
                $formatter = $this->jsonFormatter;
            case self::XML_FORMAT:
                $formatter = $this->xmlFormatter;
        }

        return $formatter;
    }
}
