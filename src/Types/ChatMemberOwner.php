<?php

namespace TelegramBot\Api\Types;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner extends ChatMember
{
    protected static array $requiredParams = [
        'status',
        'user',
        'is_anonymous',
    ];

    protected static array $map = [
        'status' => true,
        'user' => User::class,
        'is_anonymous' => true,
        'custom_title' => true,
    ];

    /**
     * The member's status in the chat, always “creator”
     */
    protected string $status;

    /**
     * Information about the user
     */
    protected User $user;

    /**
     * True, if the user's presence in the chat is hidden
     */
    protected bool $isAnonymous;

    /**
     * Optional. Custom title for this user
     */
    protected ?string $customTitle = null;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function isAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }
}
