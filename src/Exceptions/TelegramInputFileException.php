<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exceptions;

class TelegramInputFileException extends \Exception
{
    public function __construct(string $filePath)
    {
        $message = sprintf('File is not found: "%s"', $filePath);

        parent::__construct($message);
    }
}
