<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

abstract class BaseArray implements TypeInterface
{
    protected static string $type;

    private function __construct()
    {
    }

    /**
     * @psalm-suppress LessSpecificImplementedReturnType
     * @return array|list<BaseType>|list<list<BaseType>>
     */
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
