<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 */
class ChatMemberLeft extends ChatMember
{
    protected static array $requiredParams = [
        'status',
        'user',
    ];

    protected static array $map = [
        'status' => true,
        'user' => User::class,
    ];

    /**
     * The member's status in the chat, always “left”
     */
    protected string $status;

    /**
     * Information about the user
     */
    protected User $user;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
