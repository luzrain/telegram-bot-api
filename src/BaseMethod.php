<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

/**
 * Base class for Telegram Method
 *
 * @see https://core.telegram.org/bots/api#available-methods
 *
 * @template T
 */
abstract class BaseMethod implements \JsonSerializable
{
    protected static string $methodName;
    protected static string $responseClass;

    public function getMethodName(): string
    {
        return static::$methodName;
    }

    public function getRequest(): \Generator
    {
        foreach ($this as $key => $value) {
            if ($value !== null) {
                yield StringUtils::toSnakeCase($key) => $value;
            }
        }
    }

    /**
     * @psalm-suppress InvalidReturnStatement
     * @psalm-suppress InvalidReturnType
     * @psalm-return T
     */
    public function createResponse(array|string|int|bool $data): BaseType|array|string|int|bool
    {
        if (!is_array($data)) {
            return $data;
        }

        /** @psalm-var class-string<BaseType> $responeClass */
        $responeClass = static::$responseClass;

        return $responeClass::fromResponse($data);
    }

    public function jsonSerialize(): array
    {
        $array = ['method' => $this->getMethodName()];
        $array += iterator_to_array($this->getRequest());

        return $array;
    }
}
