<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

final class TelegramInputFileException extends \Exception
{
    public function __construct(string $filePath)
    {
        parent::__construct(\sprintf('File is not found: "%s"', $filePath));
    }
}
