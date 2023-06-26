<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type\Update;

final class MyChatMember extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->myChatMember !== null;
    }

    public function executeCallback(Update $update): mixed
    {
        return $this->callback($update->myChatMember);
    }
}
