<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type;

final class MessageReactionUpdated extends Event
{
    public function executeChecker(Type\Update $update): bool
    {
        return $update->messageReaction !== null;
    }

    public function executeCallback(Type\Update $update): mixed
    {
        return $this->callback($update->messageReaction);
    }
}
