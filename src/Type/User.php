<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a Telegram user or bot.
 */
final readonly class User extends Type
{
    protected function __construct(
        /**
         * Unique identifier for this user or bot
         */
        public int $id,

        /**
         * True, if this user is a bot
         */
        public bool $isBot,

        /**
         * User's or bot's first name
         */
        public string $firstName,

        /**
         * Optional. User's or bot's last name
         */
        public string|null $lastName = null,

        /**
         * Optional. User's or bot's username
         */
        public string|null $username = null,

        /**
         * Optional. IETF language tag of the user's language
         */
        public string|null $languageCode = null,

        /**
         * Optional. True, if this user is a Telegram Premium user
         */
        public true|null $isPremium = null,

        /**
         * Optional. True, if this user added the bot to the attachment menu
         */
        public true|null $addedToAttachmentMenu = null,

        /**
         * Optional. True, if the bot can be invited to groups. Returned only in getMe.
         */
        public bool|null $canJoinGroups = null,

        /**
         * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
         */
        public bool|null $canReadAllGroupMessages = null,

        /**
         * Optional. True, if the bot supports inline queries. Returned only in getMe.
         */
        public bool|null $supportsInlineQueries = null,
    ) {
    }
}
