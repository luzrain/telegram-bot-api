<?php

namespace TelegramBot\Api\Events\Events;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class EditedChannelPost extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getEditedChannelPost() !== null;
    }

    public function executeAction(Update $update): bool
    {
        if (!$update->getEditedChannelPost()) {
            return true;
        }

        $reflectionAction = new ReflectionFunction($this->getAction());
        $reflectionAction->invokeArgs([$update->getEditedChannelPost()]);

        return false;
    }
}
