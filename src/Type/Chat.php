<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a chat.
 */
final readonly class Chat extends Type
{
    protected function __construct(
        /**
         * Unique identifier for this chat. This number may have more than 32 significant bits and some programming
         * languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits,
         * so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public int $id,

        /**
         * Type of the chat, can be either "private", "group", "supergroup" or "channel"
         */
        public string $type,

        /**
         * Optional. Title, for supergroups, channels and group chats
         */
        public string|null $title = null,

        /**
         * Optional. Username, for private chats, supergroups and channels if available
         */
        public string|null $username = null,

        /**
         * Optional. First name of the other party in a private chat
         */
        public string|null $firstName = null,

        /**
         * Optional. Last name of the other party in a private chat
         */
        public string|null $lastName = null,

        /**
         * Optional. True, if the supergroup chat is a forum (has topics enabled)
         */
        public true|null $isForum = null,

        /**
         * Optional. True, if the chat is the direct messages chat of a channel
         */
        public true|null $isDirectMessages = null,
    ) {
    }
}
