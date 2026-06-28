<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Internal;

use Luzrain\TelegramBotApi\Type;

/**
 * @internal
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_PARAMETER)]
final readonly class ArrayOfArayType implements TypeDefinition
{
    /**
     * @param class-string<Type> $type
     */
    public function __construct(public string $type)
    {
    }

    /**
     * @return list<list<Type>>
     */
    public function create(string|array $data): array
    {
        return self::createArrayOfArray($this->type, (array) $data);
    }

    /**
     * @psalm-suppress MoreSpecificReturnType
     * @psalm-suppress LessSpecificReturnStatement
     * @param class-string<Type> $type
     * @return list<list<Type>>
     */
    public static function createArrayOfArray(string $type, array $data): array
    {
        return \array_map(static fn(array $array): array => ArrayType::createArray($type, $array), $data);
    }
}
