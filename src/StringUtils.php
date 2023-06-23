<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

final class StringUtils
{
    public static function toCamelCase(string $string): string
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $string))));
    }

    public static function toSnakeCase(string $string): string
    {
        return strtolower(preg_replace('/[A-Z]/', '_\\0', lcfirst($string)));
    }
}
