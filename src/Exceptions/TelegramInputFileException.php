<?php

namespace TelegramBot\Api\Exceptions;

use Exception;

class TelegramInputFileException extends Exception
{
    public function __construct(string $filePath)
    {
        $message = sprintf('File is not found: "%s"', $filePath);

        parent::__construct($message);
    }
}
