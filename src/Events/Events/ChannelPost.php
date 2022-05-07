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
        $this->getAction()($update->getChannelPost());

        return false;
    }
}
