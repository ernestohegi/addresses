<?php

namespace src\Addresses\Services;

class ResponseService implements ResponseServiceInterface
{
    private $formatterService;

    public function __construct(
        FormatterInterface $formatterService
    ) {
        $this->formatterService = $formatterService;
    }

    /**
     * {@inheritdoc}
     */
    public function sendResponse($content, $format)
    {
        $formatter = $this->formatterService->getFormatter($format);

        return $formatter(
            $content
        );
    }
}
