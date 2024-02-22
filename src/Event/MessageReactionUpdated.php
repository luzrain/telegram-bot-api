<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type;

/**
 * A change of a reaction on a message performed by a user.
 * The bot must explicitly allow the update "message_reaction" to receive it.
 */
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
