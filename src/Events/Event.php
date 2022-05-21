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
     * @param mixed $params
     * @return mixed
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

    /**
     * @param Update $update
     * @return bool
     */
    abstract public function executeChecker(Update $update): bool;

    /**
     * @param Update $update
     * @return mixed
     */
    abstract public function executeAction(Update $update): mixed;
}
