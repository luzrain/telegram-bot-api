<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

/**
 * Member left the group
 */
final class MemberLeftTheGroup extends Event
{
    public function executeChecker(Type\Update $update): bool
    {
        return $update->message?->leftChatMember !== null;
    }

    public function executeCallback(Type\Update $update): Method|null
    {
        return $this->callback($update->message);
    }
}
