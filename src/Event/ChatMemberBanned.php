<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type\ChatMemberBanned as ChatMemberBannedType;
use Luzrain\TelegramBotApi\Type\Update;

final class ChatMemberBanned extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->myChatMember?->newChatMember instanceof ChatMemberBannedType;
    }

    public function executeCallback(Update $update): Method|null
    {
        return $this->callback($update->myChatMember->from);
    }
}
