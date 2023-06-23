<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

use Luzrain\TelegramBotApi\BaseMethod;

final class TelegramCallbackException extends \Exception
{
    public function __construct(string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public static function createArgumentException(\Throwable $previous): self
    {
        return new self($previous->getMessage(), 0, $previous);
    }

    public static function createWrongResponseException(string $type): self
    {
        return new self(sprintf('Callback should return instance of %s or null, %s returned', BaseMethod::class, $type));
    }
}
