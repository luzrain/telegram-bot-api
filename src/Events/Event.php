<?php

namespace TelegramBot\Api\Events;

use Closure;
use TelegramBot\Api\Types\Update;

abstract class Event
{
    private $action;

    public function __construct(Closure $action)
    {
        $this->action = $action;
    }

    protected function getAction(): Closure
    {
        return $this->action;
    }

    abstract public function executeChecker(Update $update): bool;

    abstract public function executeAction(Update $update): bool;
}
