<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a chat.
 */
final readonly class Chat extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Unique identifier for this chat
         */
        public int $id,

        /**
         * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
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
         * Optional. Chat photo. Returned only in getChat.
         */
        public ChatPhoto|null $photo = null,

        /**
         * Optional. If non-empty, the list of all active chat usernames, for private chats, supergroups and channels. Returned only in getChat.
         *
         * @var list<string>|null
         */
        public array|null $activeUsernames = null,

        /**
         * Optional. Custom emoji identifier of emoji status of the other party in a private chat. Returned only in getChat.
         */
        public string|null $emojiStatusCustomEmojiId = null,

        /**
         * Optional. Bio of the other party in a private chat. Returned only in getChat.
         */
        public string|null $bio = null,

        /**
         * Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user.
         * Returned only in getChat.
         */
        public true|null $hasPrivateForwards = null,

        /**
         * Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat.
         * Returned only in getChat.
         */
        public true|null $hasRestrictedVoiceAndVideoMessages = null,

        /**
         * Optional. True, if users need to join the supergroup before they can send messages.
         * Returned only in getChat.
         */
        public true|null $joinToSendMessages = null,

        /**
         * Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators.
         * Returned only in getChat.
         */
        public true|null $joinByRequest = null,

        /**
         * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
         */
        public string|null $description = null,

        /**
         * Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat.
         */
        public string|null $inviteLink = null,

        /**
         * Optional. The most recent pinned message (by sending date). Returned only in getChat.
         */
        public Message|null $pinnedMessage = null,

        /**
         * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
         */
        public ChatPermissions|null $permissions = null,

        /**
         * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user, in seconds.
         * Returned only in getChat.
         */
        public int|null $slowModeDelay = null,

        /**
         * Optional. The time after which all messages sent to the chat will be automatically deleted, in seconds. Returned only in getChat.
         */
        public int|null $messageAutoDeleteTime = null,

        /**
         * Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
         * Returned only in getChat.
         */
        public true|null $hasAggressiveAntiSpamEnabled = null,

        /**
         * Optional. True, if non-administrators can only get the list of bots and administrators in the chat. Returned only in getChat.
         */
        public true|null $hasHiddenMembers = null,

        /**
         * Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
         */
        public true|null $hasProtectedContent = null,

        /**
         * Optional. For supergroups, name of group sticker set. Returned only in getChat.
         */
        public string|null $stickerSetName = null,

        /**
         * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
         */
        public true|null $canSetStickerSet = null,

        /**
         * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa,
         * for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may
         * have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or
         * double-precision float type are safe for storing this identifier. Returned only in getChat.
         */
        public int|null $linkedChatId = null,

        /**
         * Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
         */
        public ChatLocation|null $location = null,
    ) {
    }
}
