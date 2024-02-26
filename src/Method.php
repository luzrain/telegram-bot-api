<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramTypeException;

/**
 * Base class for Telegram Method
 *
 * @see https://core.telegram.org/bots/api#available-methods
 *
 * @template TReturn of Type|list<Type>|list<list<Type>>|int|string|bool
 */
abstract class Method implements \JsonSerializable
{
    protected static string $methodName;
    protected static string $responseClass = '';
    protected static bool $isArrayOfResponse = false;
    protected static bool $isArrayOfArrayOfResponse = false;

    public function getName(): string
    {
        return static::$methodName;
    }

    /**
     * @return TReturn
     * @throws TelegramTypeException
     * @psalm-suppress MoreSpecificReturnType
     * @psalm-suppress LessSpecificReturnStatement
     */
    public function createResponse(array|int|string|bool $data): Type|array|int|string|bool
    {
        /** @var class-string<Type> $responseClass */
        $responseClass = static::$responseClass;

        return match(true) {
            \is_array($data) && \is_subclass_of($responseClass, TypeDenormalizable::class) => $responseClass::fromArray($data),
            \is_array($data) && static::$isArrayOfResponse => ArrayType::createArray($responseClass, $data),
            \is_array($data) && static::$isArrayOfArrayOfResponse => ArrayType::createArrayOfArray($responseClass, $data),
            default => $data,
        };
    }

    /**
     * @return \Generator<string>
     */
    public function iterateRequestProps(): \Generator
    {
        foreach ($this as $key => $value) {
            if ($value !== null) {
                yield StringUtils::toSnakeCase($key) => $value;
            }
        }
    }

    public function jsonSerialize(): array
    {
        return \array_merge(
            ['method' => $this->getName()],
            \iterator_to_array($this->iterateRequestProps()),
        );
    }
}
