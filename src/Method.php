<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramTypeException;
use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Internal\StringUtils;

/**
 * Base class for Telegram Method
 *
 * @see https://core.telegram.org/bots/api#available-methods
 *
 * @template TReturn
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
     * @internal
     * @return TReturn
     * @throws TelegramTypeException
     * @psalm-suppress InvalidReturnType
     * @psalm-suppress InvalidReturnStatement
     */
    public function createResponse(array|int|string|bool $data): mixed
    {
        /** @var class-string<Type> $responseClass */
        $responseClass = static::$responseClass;

        return match (true) {
            \is_array($data) && static::$isArrayOfResponse => ArrayType::createArray($responseClass, $data),
            \is_array($data) && static::$isArrayOfArrayOfResponse => ArrayType::createArrayOfArray($responseClass, $data),
            \is_array($data) => $responseClass::fromArray($data),
            default => $data,
        };
    }

    public function getIterator(): \Traversable
    {
        /** @psalm-suppress RawObjectIteration */
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
            \iterator_to_array($this->getIterator()),
        );
    }
}
