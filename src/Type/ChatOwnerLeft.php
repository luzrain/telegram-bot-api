<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about the chat owner leaving the chat.
 */
final readonly class ChatOwnerLeft extends Type
{
    protected function __construct(
        /**
         * Optional. The user who will become the new owner of the chat if the previous owner does not return to the chat
         */
        public User|null $newOwner = null,
    ) {
    }
}
