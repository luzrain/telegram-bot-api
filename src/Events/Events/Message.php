<?php

namespace TelegramBot\Api\Events\Events;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class Message extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getMessage() !== null;
    }

    public function executeAction(Update $update): bool
    {
        $this->getAction()($update->getMessage());

        return false;
    }
}
