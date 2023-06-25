<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 */
final class ChatMemberLeft extends ChatMember
{
    protected function __construct(
        /**
         * The member's status in the chat, always “left”
         */
        public string $status,

        /**
         * Information about the user
         */
        public User $user,
    ) {
        parent::__construct($this->status);
    }
}
