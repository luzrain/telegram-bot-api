<?php

declare(strict_types=1);

namespace TelegramBot\Api\Events\Event;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class CallbackQuery extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getCallbackQuery() !== null;
    }

    public function executeAction(Update $update): BaseMethod|null
    {
        return $this->callback($update->getCallbackQuery());
    }
}
