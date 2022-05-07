<?php

namespace TelegramBot\Api\Events\Events;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class InlineQuery extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getInlineQuery() !== null;
    }

    public function executeAction(Update $update): bool
    {
        if (!$update->getInlineQuery()) {
            return true;
        }

        $reflectionAction = new ReflectionFunction($this->getAction());
        $reflectionAction->invokeArgs([$update->getInlineQuery()]);

        return false;
    }
}
