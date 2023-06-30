<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

/**
 * @internal
 */
final class StringUtils
{
    public static function toSnakeCase(string $string): string
    {
        return strtolower(preg_replace('/[A-Z]/', '_\\0', lcfirst($string)));
    }
}
