<?php

declare(strict_types=1);

namespace TelegramBot\Api\Events;

use Closure;
use TelegramBot\Api\Exceptions\TelegramCallbackException;
use TelegramBot\Api\Types\Update;
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
