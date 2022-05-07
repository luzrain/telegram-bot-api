<?php

namespace TelegramBot\Api\Events\Events;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class ShippingQuery extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getShippingQuery() !== null;
    }

    public function executeAction(Update $update): bool
    {
        if (!$update->getShippingQuery()) {
            return true;
        }

        $reflectionAction = new ReflectionFunction($this->getAction());
        $reflectionAction->invokeArgs([$update->getShippingQuery()]);

        return false;
    }
}
