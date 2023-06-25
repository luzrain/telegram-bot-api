<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
final class ChatMemberBanned extends ChatMember
{
    protected function __construct(
        /**
         * The member's status in the chat, always “kicked”
         */
        public string $status,

        /**
         * Information about the user
         */
        public User $user,

        /**
         * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
         */
        public int $untilDate,
    ) {
        parent::__construct($this->status);
    }
}
