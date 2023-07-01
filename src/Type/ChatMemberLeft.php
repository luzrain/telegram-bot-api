<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 */
final readonly class ChatMemberLeft extends ChatMember
{
    protected function __construct(
        /**
         * Information about the user
         */
        public User $user,
    ) {
        parent::__construct('left');
    }
}
