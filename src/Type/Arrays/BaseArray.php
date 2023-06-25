<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\TypeInterface;

abstract class BaseArray implements TypeInterface
{
    protected static string $type;

    private function __construct()
    {
    }

    public static function fromArray(array $data): array
    {
        /** @var TypeInterface $type */
        $type = static::$type;
        $array = [];
        foreach ($data as $item) {
            $array[] = $type::fromArray($item);
        }

        return $array;
    }
}
