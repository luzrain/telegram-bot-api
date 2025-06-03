<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object contains full information about a chat.
 */
final readonly class ChatFullInfo extends Type
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
         * Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview.
         * See accent colors for more details.
         *
         * @see https://core.telegram.org/bots/api#accent-colors
         */
        public int $accentColorId,

        /**
         * The maximum number of reactions that can be set on a message in the chat
         */
        public int $maxReactionCount,

        /**
         * Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
         */
        public AcceptedGiftTypes $acceptedGiftTypes,

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
         * Optional. Chat photo
         */
        public ChatPhoto|null $photo = null,

        /**
         * Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
         *
         * @var list<string>|null
         */
        public array|null $activeUsernames = null,

        /**
         * Optional. For private chats, the date of birth of the user
         */
        public Birthdate|null $birthdate = null,

        /**
         * Optional. For private chats with business accounts, the intro of the business
         */
        public BusinessIntro|null $businessIntro = null,

        /**
         * Optional. For private chats with business accounts, the location of the business
         */
        public BusinessLocation|null $businessLocation = null,

        /**
         * Optional. For private chats with business accounts, the opening hours of the business
         */
        public BusinessOpeningHours|null $businessOpeningHours = null,

        /**
         * Optional. For private chats, the personal channel of the user
         */
        public Chat|null $personalChat = null,

        /**
         * Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
         *
         * @var null|list<ReactionType>
         */
        #[ArrayType(ReactionType::class)]
        public array|null $availableReactions = null,

        /**
         * Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
         */
        public string|null $backgroundCustomEmojiId = null,

        /**
         * Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
         */
        public int|null $profileAccentColorId = null,

        /**
         * Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
         */
        public string|null $profileBackgroundCustomEmojiId = null,

        /**
         * Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
         */
        public string|null $emojiStatusCustomEmojiId = null,

        /**
         * Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
         */
        public int|null $emojiStatusExpirationDate = null,

        /**
         * Optional. Bio of the other party in a private chat
         */
        public string|null $bio = null,

        /**
         * Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id>
         * links only in chats with the user
         */
        public true|null $hasPrivateForwards = null,

        /**
         * Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
         */
        public true|null $hasRestrictedVoiceAndVideoMessages = null,

        /**
         * Optional. True, if users need to join the supergroup before they can send messages
         */
        public true|null $joinToSendMessages = null,

        /**
         * Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators
         */
        public true|null $joinByRequest = null,

        /**
         * Optional. Description, for groups, supergroups and channel chats
         */
        public string|null $description = null,

        /**
         * Optional. Primary invite link, for groups, supergroups and channel chats
         */
        public string|null $inviteLink = null,

        /**
         * Optional. The most recent pinned message (by sending date)
         */
        public Message|null $pinnedMessage = null,

        /**
         * Optional. Default chat member permissions, for groups and supergroups
         */
        public ChatPermissions|null $permissions = null,

        /**
         * Optional. True, if gifts can be sent to the chat
         * @deprecated replaced by acceptedGiftTypes
         */
        public true|null $canSendGift = null,

        /**
         * Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
         */
        public true|null $canSendPaidMedia = null,

        /**
         * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
         */
        public int|null $slowModeDelay = null,

        /**
         * Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore
         * slow mode and chat permissions
         */
        public int|null $unrestrictBoostCount = null,

        /**
         * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
         */
        public int|null $messageAutoDeleteTime = null,

        /**
         * Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
         */
        public true|null $hasAggressiveAntiSpamEnabled = null,

        /**
         * Optional. True, if non-administrators can only get the list of bots and administrators in the chat
         */
        public true|null $hasHiddenMembers = null,

        /**
         * Optional. True, if messages from the chat can't be forwarded to other chats
         */
        public true|null $hasProtectedContent = null,

        /**
         * Optional. True, if new chat members will have access to old messages; available only to chat administrators
         */
        public true|null $hasVisibleHistory = null,

        /**
         * Optional. For supergroups, name of the group sticker set
         */
        public string|null $stickerSetName = null,

        /**
         * Optional. True, if the bot can change the group sticker set
         */
        public true|null $canSetStickerSet = null,

        /**
         * Optional. For supergroups, the name of the group's custom emoji sticker set.
         * Custom emoji from this set can be used by all users and bots in the group.
         */
        public string|null $customEmojiStickerSetName = null,

        /**
         * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa;
         * for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may
         * have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or
         * double-precision float type are safe for storing this identifier.
         */
        public int|null $linkedChatId = null,

        /**
         * Optional. For supergroups, the location to which the supergroup is connected
         */
        public ChatLocation|null $location = null,
    ) {
    }
}
