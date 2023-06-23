<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Arrays;

abstract class BaseArray
{
    protected static string $type;

    private function __construct()
    {
    }

    public static function fromResponse(array $data): array
    {
        $type = static::$type;
        $array = [];

        foreach ($data as $item) {
            $array[] = $type::fromResponse($item);
        }

        return $array;
    }
}
