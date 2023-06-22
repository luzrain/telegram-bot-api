<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 */
class ChatMemberRestricted extends ChatMember
{
    protected static array $requiredParams = [
        'status',
        'user',
        'is_member',
        'can_change_info',
        'can_invite_users',
        'can_pin_messages',
        'can_send_messages',
        'can_send_media_messages',
        'can_send_polls',
        'can_send_other_messages',
        'can_add_web_page_previews',
        'until_date',
    ];

    protected static array $map = [
        'status' => true,
        'user' => User::class,
        'is_member' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_pin_messages' => true,
        'can_send_messages' => true,
        'can_send_media_messages' => true,
        'can_send_polls' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_previews' => true,
        'can_manage_topics' => true,
        'until_date' => true,
    ];

    /**
     * The member's status in the chat, always “restricted”
     */
    protected string $status;

    /**
     * Information about the user
     */
    protected User $user;

    /**
     * True, if the user is a member of the chat at the moment of the request
     */
    protected bool $isMember;

    /**
     * True, if the user is allowed to change the chat title, photo and other settings
     */
    protected bool $canChangeInfo;

    /**
     * True, if the user is allowed to invite new users to the chat
     */
    protected bool $canInviteUsers;

    /**
     * True, if the user is allowed to pin messages
     */
    protected bool $canPinMessages;

    /**
     * True, if the user is allowed to send text messages, contacts, locations and venues
     */
    protected bool $canSendMessages;

    /**
     * True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
     */
    protected bool $canSendMediaMessages;

    /**
     * True, if the user is allowed to send polls
     */
    protected bool $canSendPolls;

    /**
     * True, if the user is allowed to send animations, games, stickers and use inline bots
     */
    protected bool $canSendOtherMessages;

    /**
     * True, if the user is allowed to add web page previews to their messages
     */
    protected bool $canAddWebPagePreviews;

    /**
     * True, if the user is allowed to create forum topics
     */
    protected ?bool $canManageTopics = null;

    /**
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever
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

    public function isMember(): bool
    {
        return $this->isMember;
    }

    public function isCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function isCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function isCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    public function isCanSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    public function isCanSendMediaMessages(): bool
    {
        return $this->canSendMediaMessages;
    }

    public function isCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    public function isCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    public function isCanAddWebPagePreviews(): bool
    {
        return $this->canAddWebPagePreviews;
    }

    public function getCanManageTopics(): ?bool
    {
        return $this->canManageTopics;
    }

    public function getUntilDate(): int
    {
        return $this->untilDate;
    }
}
