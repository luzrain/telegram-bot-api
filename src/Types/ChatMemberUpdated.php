<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents changes in the status of a chat member.
 */
final class ChatMemberUpdated extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'chat',
        'from',
        'date',
        'old_chat_member',
        'new_chat_member',
    ];

    protected static array $map = [
        'chat' => Chat::class,
        'from' => User::class,
        'date' => true,
        'old_chat_member' => ChatMember::class,
        'new_chat_member' => ChatMember::class,
        'invite_link' => ChatInviteLink::class,
        'via_chat_folder_invite_link' => true,
    ];

    /**
     * Chat the user belongs to
     */
    protected Chat $chat;

    /**
     * Performer of the action, which resulted in the change
     */
    protected User $from;

    /**
     * Date the change was done in Unix time
     */
    protected int $date;

    /**
     * Previous information about the chat member
     */
    protected ChatMember $oldChatMember;

    /**
     * New information about the chat member
     */
    protected ChatMember $newChatMember;

    /**
     * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     */
    protected ?ChatInviteLink $inviteLink = null;

    /**
     * Optional. True, if the user joined the chat via a chat folder invite link
     */
    protected ?bool $viaChatFolderInviteLink = null;

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

    public function getOldChatMember(): ChatMember
    {
        return $this->oldChatMember;
    }

    public function getNewChatMember(): ChatMember
    {
        return $this->newChatMember;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getViaChatFolderInviteLink(): ?bool
    {
        return $this->viaChatFolderInviteLink;
    }
}
