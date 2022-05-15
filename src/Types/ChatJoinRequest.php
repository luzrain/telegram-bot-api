<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'chat',
        'from',
        'date',
    ];

    protected static array $map = [
        'chat' => Chat::class,
        'from' => User::class,
        'date' => true,
        'bio' => true,
        'invite_link' => ChatInviteLink::class,
    ];

    /**
     * Chat to which the request was sent
     */
    protected Chat $chat;

    /**
     * User that sent the join request
     */
    protected User $from;

    /**
     * Date the request was sent in Unix time
     */
    protected int $date;

    /**
     * Optional. Bio of the user.
     */
    protected ?string $bio = null;

    /**
     * Optional. Chat invite link that was used by the user to send the join request
     */
    protected ?ChatInviteLink $inviteLink = null;

    public function getChat(): Chat
    {
        return $this->chat;
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }
}
