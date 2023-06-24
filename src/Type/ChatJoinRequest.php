<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Represents a join request sent to a chat.
 */
final class ChatJoinRequest extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'chat',
        'from',
        'date',
    ];

    protected static array $map = [
        'chat' => Chat::class,
        'from' => User::class,
        'user_chat_id' => true,
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
     * Identifier of a private chat with the user who sent the join request.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * The bot can use this identifier for 24 hours to send messages until the join request is processed,
     * assuming no other administratorcontacted the user.
     */
    protected int|null $userChatId = null;

    /**
     * Date the request was sent in Unix time
     */
    protected int $date;

    /**
     * Optional. Bio of the user.
     */
    protected string|null $bio = null;

    /**
     * Optional. Chat invite link that was used by the user to send the join request
     */
    protected ChatInviteLink|null $inviteLink = null;

    public function getChat(): Chat
    {
        return $this->chat;
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function getUserChatId(): int|null
    {
        return $this->userChatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getBio(): string|null
    {
        return $this->bio;
    }

    public function getInviteLink(): ChatInviteLink|null
    {
        return $this->inviteLink;
    }
}
