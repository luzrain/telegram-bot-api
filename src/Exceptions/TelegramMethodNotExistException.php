<?php

declare(strict_types=1);

namespace TelegramBot\Api\Exceptions;

use Exception;

class TelegramMethodNotExistException extends Exception
{
    private const ERROR_TEMLATE = 'Telegram method "%s" not exists';

    public function __construct(string $methodName)
    {
        parent::__construct(sprintf(self::ERROR_TEMLATE, $methodName));
    }
}
