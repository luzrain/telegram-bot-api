<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramCallbackException;
use Luzrain\TelegramBotApi\Type\Update;

abstract class Event
{
    private $action;

    public function __construct(\Closure $action)
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
        } catch (\TypeError $e) {
            throw TelegramCallbackException::createArgumentException($e);
        }
    }

    abstract public function executeChecker(Update $update): bool;

    abstract public function executeAction(Update $update): mixed;
}
