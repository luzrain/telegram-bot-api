<?php

namespace TelegramBot\Api\Exceptions;

use Exception;
use TelegramBot\Api\Types\ResponseParameters;
use Throwable;

class TelegramApiException extends Exception
{
    private ?ResponseParameters $parameters;

    public function __construct(string $message = '', int $code = 0, ?Throwable $previous = null, ?ResponseParameters $parameters = null)
    {
        $this->parameters = $parameters;

        parent::__construct($message, $code, $previous);
    }

    public function getParameters(): ?ResponseParameters
    {
        return $this->parameters;
    }
}
