<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

final class ChatMemberAdministrator extends Event
{
    public function executeChecker(Type\Update $update): bool
    {
        return $update->chatMember?->newChatMember instanceof Type\ChatMemberAdministrator;
    }

    public function executeCallback(Type\Update $update): Method|null
    {
        return $this->callback($update->chatMember);
    }
}
