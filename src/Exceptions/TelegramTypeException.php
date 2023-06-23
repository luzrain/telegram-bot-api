<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exceptions;

class TelegramTypeException extends \Exception
{
    private const ERROR_TEMLATE = '%s object creation error. Missing keys: %s';

    public function __construct(string $typeClass, array $missingKeys)
    {
        $typeClassParts = explode('\\', $typeClass);
        $errorText = sprintf(self::ERROR_TEMLATE, array_pop($typeClassParts), implode(', ', $missingKeys));
        parent::__construct($errorText);
    }
}
