<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Type\Update;

abstract class Event
{
    public function __construct(private readonly \Closure $action)
    {
    }

    final protected function callback(mixed ...$params): mixed
    {
        return ($this->action)(...$params);
    }

    abstract public function executeChecker(Update $update): bool;

    abstract public function executeAction(Update $update): mixed;
}
