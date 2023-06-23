<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
final class ChatMemberBanned extends ChatMember
{
    protected static array $requiredParams = [
        'status',
        'user',
        'until_date',
    ];

    protected static array $map = [
        'status' => true,
        'user' => User::class,
        'until_date' => true,
    ];

    /**
     * The member's status in the chat, always “kicked”
     */
    protected string $status;

    /**
     * Information about the user
     */
    protected User $user;

    /**
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
     */
    protected int $untilDate;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getUntilDate(): int
    {
        return $this->untilDate;
    }
}
