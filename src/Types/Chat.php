<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a chat.
 */
class Chat extends BaseType implements TypeInterface
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
        'photo' => ChatPhoto::class,
        'bio' => true,
        'has_private_forwards' => true,
        'description' => true,
        'invite_link' => true,
        'pinned_message' => Message::class,
        'permissions' => ChatPermissions::class,
        'slow_mode_delay' => true,
        'message_auto_delete_time' => true,
        'has_protected_content' => true,
        'sticker_set_name' => true,
        'can_set_sticker_set' => true,
        'linked_chat_id' => true,
        'location' => ChatLocation::class
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
    protected ?string $title = null;

    /**
     * Optional. Username, for private chats, supergroups and channels if available
     */
    protected ?string $username = null;

    /**
     * Optional. First name of the other party in a private chat
     */
    protected ?string $firstName = null;

    /**
     * Optional. Last name of the other party in a private chat
     */
    protected ?string $lastName = null;

    /**
     * Optional. Chat photo. Returned only in getChat.
     */
    protected ?ChatPhoto $photo = null;

    /**
     * Optional. Bio of the other party in a private chat. Returned only in getChat.
     */
    protected ?string $bio = null;

    /**
     * Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user.
     * Returned only in getChat.
     */
    protected ?bool $hasPrivateForwards = null;

    /**
     * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
     */
    protected ?string $description = null;

    /**
     * Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat.
     */
    protected ?string $inviteLink = null;

    /**
     * Optional. The most recent pinned message (by sending date). Returned only in getChat.
     */
    protected ?Message $pinnedMessage = null;

    /**
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     */
    protected ?ChatPermissions $permissions = null;

    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds.
     * Returned only in getChat.
     */
    protected ?int $slowModeDelay = null;

    /**
     * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat.
     */
    protected ?int $messageAutoDeleteTime = null;

    /**
     * Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
     */
    protected ?bool $hasProtectedContent = null;

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     */
    protected ?string $stickerSetName = null;

    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     */
    protected ?bool $canSetStickerSet = null;

    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa;
     * for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may
     * have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or
     * double-precision float type are safe for storing this identifier. Returned only in getChat.
     */
    protected ?int $linkedChatId = null;

    /**
     * Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
     */
    protected ?ChatLocation $location = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function hasPrivateForwards(): ?bool
    {
        return $this->hasPrivateForwards;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getInviteLink(): ?string
    {
        return $this->inviteLink;
    }

    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    public function getPermissions(): ?ChatPermissions
    {
        return $this->permissions;
    }

    public function getSlowModeDelay(): ?int
    {
        return $this->slowModeDelay;
    }

    public function getMessageAutoDeleteTime(): ?int
    {
        return $this->messageAutoDeleteTime;
    }

    public function hasProtectedContent(): ?bool
    {
        return $this->hasProtectedContent;
    }

    public function getStickerSetName(): ?string
    {
        return $this->stickerSetName;
    }

    public function isCanSetStickerSet(): ?bool
    {
        return $this->canSetStickerSet;
    }

    public function getLinkedChatId(): ?int
    {
        return $this->linkedChatId;
    }

    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }
}
