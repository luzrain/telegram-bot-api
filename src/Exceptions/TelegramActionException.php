<?php

declare(strict_types=1);

namespace TelegramBot\Api\Exceptions;

use Exception;
use TelegramBot\Api\BaseMethod;

class TelegramActionException extends Exception
{
    private const ERROR_TEMLATE = 'Closure should return %s or null';

    public function __construct()
    {
        $errorText = sprintf(self::ERROR_TEMLATE, BaseMethod::class);
        parent::__construct($errorText);
    }
}
