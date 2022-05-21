<?php

declare(strict_types=1);

namespace TelegramBot\Api\Events\Event;

use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class ChosenInlineResult extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getChosenInlineResult() !== null;
    }

    public function executeAction(Update $update): mixed
    {
        return $this->callback($update->getChosenInlineResult());
    }
}
