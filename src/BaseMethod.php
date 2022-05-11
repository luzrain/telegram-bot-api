<?php

namespace TelegramBot\Api;

/**
 * Base class for Telegram Method
 *
 * @see https://core.telegram.org/bots/api#available-methods
 */
abstract class BaseMethod
{
    protected static string $methodName;

    protected static string $responseClass;

    public function getMethodName(): string
    {
        return static::$methodName;
    }

    public function getRequest(): iterable
    {
        foreach ($this as $key => $value) {
            if ($value !== null) {
                yield $this->toSnakeCase($key) => $value;
            }
        }
    }

    public function createResponse(array $data): BaseType|array
    {
        $responeClass = static::$responseClass;

        return $responeClass::fromResponse($data);
    }

    private static function toSnakeCase(string $str): string
    {
        return strtolower(preg_replace('/[A-Z]/', '_\\0', lcfirst($str)));
    }
}
