<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

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
    /** @var class-string<TypeDenormalizable> */
    protected static string $responseClass;
    protected static bool $isArrayOfResponse = false;

    public function getName(): string
    {
        return static::$methodName;
    }

    /**
     * @return list<Type>|Type
     */
    public function createResponse(array $data): array|Type
    {
        if (static::$isArrayOfResponse) {
            return ArrayType::createArray(static::$responseClass, $data);
        } else {
            return (static::$responseClass)::fromArray($data);
        }
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
