<?php

declare(strict_types=1);

namespace TelegramBot\Api\Events\Event;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update as UpdateType;

final class Update extends Event
{
    public function executeChecker(UpdateType $update): bool
    {
        return true;
    }

    public function executeAction(UpdateType $update): mixed
    {
        return $this->callback($update);
    }
}
