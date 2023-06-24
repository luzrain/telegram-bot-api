<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a chat.
 */
final class Chat extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'id',
        'type',
    ];

    protected static array $map = [
        'id' => true,
        'type' => true,
        'title' => true,
        'username' => true,
        'first_name' => true,
        'last_name' => true,
        'is_forum' => true,
        'photo' => ChatPhoto::class,
        'active_usernames' => true,
        'emoji_status_custom_emoji_id' => true,
        'bio' => true,
        'has_private_forwards' => true,
        'has_restricted_voice_and_video_messages' => true,
        'join_to_send_messages' => true,
        'join_by_request' => true,
        'description' => true,
        'invite_link' => true,
        'pinned_message' => Message::class,
        'permissions' => ChatPermissions::class,
        'slow_mode_delay' => true,
        'message_auto_delete_time' => true,
        'has_aggressive_anti_spam_enabled' => true,
        'has_hidden_members' => true,
        'has_protected_content' => true,
        'sticker_set_name' => true,
        'can_set_sticker_set' => true,
        'linked_chat_id' => true,
        'location' => ChatLocation::class,
    ];

    /**
     * Unique identifier for this chat
     */
    protected int $id;

    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    protected string $type;

    /**
     * Optional. Title, for supergroups, channels and group chats
     */
    protected string|null $title = null;

    /**
     * Optional. Username, for private chats, supergroups and channels if available
     */
    protected string|null $username = null;

    /**
     * Optional. First name of the other party in a private chat
     */
    protected string|null $firstName = null;

    /**
     * Optional. Last name of the other party in a private chat
     */
    protected string|null $lastName = null;

    /**
     * Optional. True, if the supergroup chat is a forum (has topics enabled)
     */
    protected bool|null $isForum = null;

    /**
     * Optional. Chat photo. Returned only in getChat.
     */
    protected ChatPhoto|null $photo = null;

    /**
     * Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels. Returned only in getChat.
     *
     * @var list<string>
     */
    protected array|null $activeUsernames = null;

    /**
     * Optional. Custom emoji identifier of emoji status of the other party in a private chat. Returned only in getChat.
     */
    protected string|null $emojiStatusCustomEmojiId = null;

    /**
     * Optional. Bio of the other party in a private chat. Returned only in getChat.
     */
    protected string|null $bio = null;

    /**
     * Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat.
     * Returned only in getChat.
     */
    protected bool|null $hasRestrictedVoiceAndVideoMessages = null;

    /**
     * Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user.
     * Returned only in getChat.
     */
    protected bool|null $hasPrivateForwards = null;

    /**
     * Optional. True, if users need to join the supergroup before they can send messages.
     * Returned only in getChat.
     */
    protected bool|null $joinToSendMessages = null;

    /**
     * Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators.
     * Returned only in getChat.
     */
    protected bool|null $joinByRequest = null;

    /**
     * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
     */
    protected string|null $description = null;

    /**
     * Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat.
     */
    protected string|null $inviteLink = null;

    /**
     * Optional. The most recent pinned message (by sending date). Returned only in getChat.
     */
    protected Message|null $pinnedMessage = null;

    /**
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     */
    protected ChatPermissions|null $permissions = null;

    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds.
     * Returned only in getChat.
     */
    protected int|null $slowModeDelay = null;

    /**
     * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat.
     */
    protected int|null $messageAutoDeleteTime = null;

    /**
     * Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
     * Returned only in getChat.
     */
    protected bool|null $hasAggressiveAntiSpamEnabled = null;

    /**
     * Optional. True, if non-administrators can only get the list of bots and administrators in the chat. Returned only in getChat.
     */
    protected bool|null $hasHiddenMembers = null;

    /**
     * Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
     */
    protected bool|null $hasProtectedContent = null;

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     */
    protected string|null $stickerSetName = null;

    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     */
    protected bool|null $canSetStickerSet = null;

    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa;
     * for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may
     * have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or
     * double-precision float type are safe for storing this identifier. Returned only in getChat.
     */
    protected int|null $linkedChatId = null;

    /**
     * Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
     */
    protected ChatLocation|null $location = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): string|null
    {
        return $this->title;
    }

    public function getUsername(): string|null
    {
        return $this->username;
    }

    public function getFirstName(): string|null
    {
        return $this->firstName;
    }

    public function getLastName(): string|null
    {
        return $this->lastName;
    }

    public function isForum(): bool|null
    {
        return $this->isForum;
    }

    public function getPhoto(): ChatPhoto|null
    {
        return $this->photo;
    }

    public function getActiveUsernames(): array|null
    {
        return $this->activeUsernames;
    }

    public function getEmojiStatusCustomEmojiId(): string|null
    {
        return $this->emojiStatusCustomEmojiId;
    }

    public function getBio(): string|null
    {
        return $this->bio;
    }

    public function hasRestrictedVoiceAndVideoMessages(): bool|null
    {
        return $this->hasRestrictedVoiceAndVideoMessages;
    }

    public function hasPrivateForwards(): bool|null
    {
        return $this->hasPrivateForwards;
    }

    public function getJoinToSendMessages(): bool|null
    {
        return $this->joinToSendMessages;
    }

    public function getJoinByRequest(): bool|null
    {
        return $this->joinByRequest;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getInviteLink(): string|null
    {
        return $this->inviteLink;
    }

    public function getPinnedMessage(): Message|null
    {
        return $this->pinnedMessage;
    }

    public function getPermissions(): ChatPermissions|null
    {
        return $this->permissions;
    }

    public function getSlowModeDelay(): int|null
    {
        return $this->slowModeDelay;
    }

    public function getMessageAutoDeleteTime(): int|null
    {
        return $this->messageAutoDeleteTime;
    }

    public function hasAggressiveAntiSpamEnabled(): bool|null
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    public function hasHiddenMembers(): bool|null
    {
        return $this->hasHiddenMembers;
    }

    public function hasProtectedContent(): bool|null
    {
        return $this->hasProtectedContent;
    }

    public function getStickerSetName(): string|null
    {
        return $this->stickerSetName;
    }

    public function isCanSetStickerSet(): bool|null
    {
        return $this->canSetStickerSet;
    }

    public function getLinkedChatId(): int|null
    {
        return $this->linkedChatId;
    }

    public function getLocation(): ChatLocation|null
    {
        return $this->location;
    }
}
