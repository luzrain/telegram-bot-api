<?php

namespace TelegramBot\Api\Events\Events;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class CallbackQuery extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getCallbackQuery() !== null;
    }

    public function executeAction(Update $update): bool
    {
        $this->getAction()($update->getCallbackQuery());

        return false;
    }
}
