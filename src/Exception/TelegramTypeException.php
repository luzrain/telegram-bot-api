<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

final class TelegramTypeException extends \Exception
{
    public function __construct(string $typeClass, array $missingKeys)
    {
        $typeClassParts = explode('\\', $typeClass);
        parent::__construct(sprintf('%s object creation error. Missing keys: %s', array_pop($typeClassParts), implode(', ', $missingKeys)));
    }
}
