<?php

namespace TelegramBot\Api\Events\Events;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class PreCheckoutQuery extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getPreCheckoutQuery() !== null;
    }

    public function executeAction(Update $update): bool
    {
        if (!$update->getPreCheckoutQuery()) {
            return true;
        }

        $reflectionAction = new ReflectionFunction($this->getAction());
        $reflectionAction->invokeArgs([$update->getPreCheckoutQuery()]);

        return false;
    }
}
