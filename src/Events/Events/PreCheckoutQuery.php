<?php

namespace TelegramBot\Api\Events\Events;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class PreCheckoutQuery extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getPreCheckoutQuery() !== null;
    }

    public function executeAction(Update $update): BaseMethod|null
    {
        return $this->call($update->getPreCheckoutQuery());
    }
}
