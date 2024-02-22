<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type;

/**
 * Reaction changes on a message with anonymous reactions.
 * The bot must explicitly allow the update "message_reaction_count" to receive it.
 */
final class MessageReactionCountUpdated extends Event
{
    public function executeChecker(Type\Update $update): bool
    {
        return $update->messageReactionCount !== null;
    }

    public function executeCallback(Type\Update $update): mixed
    {
        return $this->callback($update->messageReactionCount);
    }
}
