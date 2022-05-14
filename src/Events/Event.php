<?php

declare(strict_types=1);

namespace TelegramBot\Api\Events;

use Closure;
use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Exceptions\TelegramActionException;
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
     * @return BaseMethod|null
     * @throws TelegramActionException
     */
    protected function call(mixed ...$params): BaseMethod|null
    {
        try {
            return ($this->action)(...$params);
        } catch (TypeError) {
            throw new TelegramActionException();
        }
    }

    /**
     * @param Update $update
     * @return bool
     */
    abstract public function executeChecker(Update $update): bool;

    /**
     * @param Update $update
     * @return BaseMethod|null
     */
    abstract public function executeAction(Update $update): BaseMethod|null;
}
