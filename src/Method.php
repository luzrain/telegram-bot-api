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
    protected static string $responseClass;

    public function getName(): string
    {
        return static::$methodName;
    }

    public function getResponseClass(): string
    {
        return static::$responseClass;
    }

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
