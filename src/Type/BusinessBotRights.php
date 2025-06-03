<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents the rights of a business bot.
 */
final readonly class BusinessBotRights extends Type
{
    protected function __construct(
        /**
         * Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
         */
        public true|null $canReply = null,

        /**
         * Optional. True, if the bot can mark incoming private messages as read
         */
        public true|null $canReadMessages = null,

        /**
         * Optional. True, if the bot can delete messages sent by the bot
         */
        public true|null $canDeleteSentMessages = null,

        /**
         * Optional. True, if the bot can delete all private messages in managed chats
         */
        public true|null $canDeleteAllMessages = null,

        /**
         * Optional. True, if the bot can edit the first and last name of the business account
         */
        public true|null $canEditName = null,

        /**
         * Optional. True, if the bot can edit the bio of the business account
         */
        public true|null $canEditBio = null,

        /**
         * Optional. True, if the bot can edit the profile photo of the business account
         */
        public true|null $canEditProfilePhoto = null,

        /**
         * Optional. True, if the bot can edit the username of the business account
         */
        public true|null $canEditUsername = null,

        /**
         * Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
         */
        public true|null $canChangeGiftSettings = null,

        /**
         * Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
         */
        public true|null $canViewGiftsAndStars = null,

        /**
         * Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
         */
        public true|null $canConvertGiftsToStars = null,

        /**
         * Optional. True, if the bot can transfer and upgrade gifts owned by the business account
         */
        public true|null $canTransferAndUpgradeGifts = null,

        /**
         * Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
         */
        public true|null $canTransferStars = null,

        /**
         * Optional. True, if the bot can post, edit and delete stories on behalf of the business account
         */
        public true|null $canManageStories = null,
    ) {
    }
}
