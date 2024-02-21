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
         * Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed. Returned only in getChat.
         *
         * @var null|list<ReactionType>
         */
        public array|null $availableReactions = null,

        /**
         * Optional. Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview.
         * See accent colors for more details. Returned only in getChat. Always returned in getChat.
         */
        public int|null $accentColorId = null,

        /**
         * Optional. Custom emoji identifier of emoji chosen by the chat for the reply header and link preview background.
         * Returned only in getChat.
         */
        public string|null $backgroundCustomEmojiId = null,

        /**
         * Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
         * Returned only in getChat.
         */
        public string|null $profileAccentColorId = null,

        /**
         * Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background. Returned only in getChat.
         */
        public string|null $profileBackgroundCustomEmojiId = null,

        /**
         * Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat.
         * Returned only in getChat.
         */
        public string|null $emojiStatusCustomEmojiId = null,

        /**
         * Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any.
         * Returned only in getChat.
         */
        public int|null $emojiStatusExpirationDate = null,

        /**
         * Optional. Bio of the other party in a private chat. Returned only in getChat.
         */
        public string|null $bio = null,

        /**
         * Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id>
         * links only in chats with the user. Returned only in getChat.
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
         * Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add
         * in order to ignore slow mode and chat permissions. Returned only in getChat.
         */
        public int|null $unrestrictBoostCount = null,

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
         * Optional. True, if new chat members will have access to old messages; available only to chat administrators.
         * Returned only in getChat.
         */
        public true|null $hasVisibleHistory = null,

        /**
         * Optional. For supergroups, name of group sticker set. Returned only in getChat.
         */
        public string|null $stickerSetName = null,

        /**
         * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
         */
        public true|null $canSetStickerSet = null,

        /**
         * Optional. For supergroups, the name of the group's custom emoji sticker set.
         * Custom emoji from this set can be used by all users and bots in the group. Returned only in getChat.
         */
        public string|null $customEmojiStickerSetName = null,

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
