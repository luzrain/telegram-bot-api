<?php

namespace TelegramBot\Api;

/**
 * Base class for Telegram Method
 *
 * @see https://core.telegram.org/bots/api#available-methods
 */
abstract class BaseMethod
{
    protected const METHOD_NAME = '';

    protected array $request = [];

    public function getMethodName(): string
    {
        return static::METHOD_NAME;
    }

    public function getRequest(): array
    {
        return \array_filter($this->request, fn (mixed $val) => $val !== null);
    }

    abstract public function createResponse(array $data): BaseType;
}
