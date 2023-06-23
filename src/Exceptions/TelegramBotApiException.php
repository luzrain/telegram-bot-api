<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exceptions;

use Luzrain\TelegramBotApi\Types\ResponseParameters;

final class TelegramBotApiException extends \Exception
{
    private ?ResponseParameters $parameters;

    public function __construct(string $message = '', int $code = 0, ?\Throwable $previous = null, ?ResponseParameters $parameters = null)
    {
        $this->parameters = $parameters;

        parent::__construct($message, $code, $previous);
    }

    public function getParameters(): ?ResponseParameters
    {
        return $this->parameters;
    }
}
