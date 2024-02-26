<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

/**
 * @internal
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_PARAMETER)]
final readonly class ArrayType
{
    /**
     * @param class-string<Type> $type
     */
    public function __construct(public string $type, private bool $arrayOfArray = false)
    {
    }

    /**
     * @return list<Type>|list<list<Type>>
     */
    public function create(array $data): array
    {
        return $this->arrayOfArray ? self::createArrayOfArray($this->type, $data) : self::createArray($this->type, $data);
    }

    /**
     * @param class-string<Type> $type
     * @return list<Type>
     */
    public static function createArray(string $type, array $data): array
    {
        $array = [];
        foreach ($data as $item) {
            $array[] = $type::fromArray($item);
        }

        return $array;
    }

    /**
     * @psalm-suppress MoreSpecificReturnType
     * @psalm-suppress LessSpecificReturnStatement
     * @param class-string<Type> $type
     * @return list<list<Type>>
     */
    public static function createArrayOfArray(string $type, array $data): array
    {
        return \array_map(fn(array $array) => self::createArray($type, $array), $data);
    }
}
