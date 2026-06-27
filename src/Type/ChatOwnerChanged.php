<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about an ownership change in the chat.
 */
final readonly class ChatOwnerChanged extends Type
{
    protected function __construct(
        /**
         * The new owner of the chat
         */
        public User $newOwner,
    ) {
    }
}
