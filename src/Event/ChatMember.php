<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type\Update;

final class ChatMember extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->chatMember !== null;
    }

    public function executeCallback(Update $update): mixed
    {
        return $this->callback($update->chatMember);
    }
}
