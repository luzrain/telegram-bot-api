<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Type\Update;

abstract class Event
{
    public function __construct(private readonly \Closure $callback)
    {
    }

    final protected function callback(mixed ...$params): mixed
    {
        return ($this->callback)(...$params);
    }

    abstract public function executeChecker(Update $update): bool;

    abstract public function executeCallback(Update $update): mixed;
}
