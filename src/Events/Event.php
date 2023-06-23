<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Events;

use Closure;
use Luzrain\TelegramBotApi\Exceptions\TelegramCallbackException;
use Luzrain\TelegramBotApi\Types\Update;
use TypeError;

abstract class Event
{
    private $action;

    public function __construct(Closure $action)
    {
        $this->action = $action;
    }

    /**
     * @throws TelegramCallbackException
     */
    final protected function callback(mixed ...$params): mixed
    {
        try {
            return ($this->action)(...$params);
        } catch (TypeError $e) {
            throw TelegramCallbackException::createArgumentException($e);
        }
    }

    abstract public function executeChecker(Update $update): bool;

    abstract public function executeAction(Update $update): mixed;
}
