<?php

namespace TelegramBot\Api\Events\Events;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class ChannelPost extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getChannelPost() !== null;
    }

    public function executeAction(Update $update): bool
    {
        if (!$update->getChannelPost()) {
            return true;
        }

        $reflectionAction = new ReflectionFunction($this->getAction());
        $reflectionAction->invokeArgs([$update->getChannelPost()]);

        return false;
    }
}
