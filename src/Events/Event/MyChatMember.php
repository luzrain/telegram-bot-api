<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Events\Event;

use Luzrain\TelegramBotApi\Events\Event;
use Luzrain\TelegramBotApi\Types\Update;

final class MyChatMember extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getMyChatMember() !== null;
    }

    public function executeAction(Update $update): mixed
    {
        return $this->callback($update->getMyChatMember());
    }
}
