<?php

namespace TelegramBot\Api\Events\Event;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update as UpdateType;

final class Update extends Event
{
    public function executeChecker(UpdateType $update): bool
    {
        return true;
    }

    public function executeAction(UpdateType $update): BaseMethod|null
    {
        return $this->callback($update);
    }
}
