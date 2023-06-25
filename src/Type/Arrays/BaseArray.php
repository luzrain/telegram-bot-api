<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

abstract class BaseArray
{
    protected static string $type;

    private function __construct()
    {
    }

    public static function fromArray(array $data): array
    {
        $type = static::$type;
        $array = [];

        foreach ($data as $item) {
            $array[] = $type::fromArray($item);
        }

        return $array;
    }
}
