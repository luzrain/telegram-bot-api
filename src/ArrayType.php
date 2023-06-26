<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

abstract class ArrayType implements TypeDenormalizable
{
    protected static string $type;

    private function __construct()
    {
    }

    /**
     * @psalm-suppress LessSpecificImplementedReturnType
     * @return array|list<Type>|list<list<Type>>
     */
    public static function fromArray(array $data): array
    {
        /** @var TypeDenormalizable $type */
        $type = static::$type;
        $array = [];
        foreach ($data as $item) {
            $array[] = $type::fromArray($item);
        }

        return $array;
    }
}
