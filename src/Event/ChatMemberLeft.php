<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

/**
 * A chat member left from the chat.
 * The bot must explicitly allow the update "chat_member" to receive it.
 */
final class ChatMemberLeft extends Event
{
    public function executeChecker(Type\Update $update): bool
    {
        return $update->chatMember?->newChatMember instanceof Type\ChatMemberLeft;
    }

    public function executeCallback(Type\Update $update): Method|null
    {
        return $this->callback($update->chatMember);
    }
}
