<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

/**
 * Represents a chat member that has some additional privileges.
 */
class ChatMemberAdministrator extends ChatMember
{
    protected static array $requiredParams = [
        'status',
        'user',
        'can_be_edited',
        'is_anonymous',
        'can_manage_chat',
        'can_delete_messages',
        'can_manage_video_chats',
        'can_restrict_members',
        'can_promote_members',
        'can_change_info',
        'can_invite_users',
    ];

    protected static array $map = [
        'status' => true,
        'user' => User::class,
        'can_be_edited' => true,
        'is_anonymous' => true,
        'can_manage_chat' => true,
        'can_delete_messages' => true,
        'can_manage_video_chats' => true,
        'can_restrict_members' => true,
        'can_promote_members' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_post_messages' => true,
        'can_edit_messages' => true,
        'can_pin_messages' => true,
        'can_manage_topics' => true,
        'custom_title' => true,
    ];

    /**
     * The member's status in the chat, always “administrator”
     */
    protected string $status;

    /**
     * Information about the user
     */
    protected User $user;

    /**
     * True, if the bot is allowed to edit administrator privileges of that user
     */
    protected bool $canBeEdited;

    /**
     * True, if the user's presence in the chat is hidden
     */
    protected bool $isAnonymous;

    /**
     * True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members,
     * see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     */
    protected bool $canManageChat;

    /**
     * True, if the administrator can delete messages of other users
     */
    protected bool $canDeleteMessages;

    /**
     * True, if the administrator can manage video chats
     */
    protected bool $canManageVideoChats;

    /**
     * True, if the administrator can restrict, ban or unban chat members
     */
    protected bool $canRestrictMembers;

    /**
     * True, if the administrator can add new administrators with a subset of their own privileges or demote administrators
     * that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     */
    protected bool $canPromoteMembers;

    /**
     * True, if the user is allowed to change the chat title, photo and other settings
     */
    protected bool $canChangeInfo;

    /**
     * True, if the user is allowed to invite new users to the chat
     */
    protected bool $canInviteUsers;

    /**
     * Optional. True, if the administrator can post in the channel; channels only
     */
    protected ?bool $canPostMessages = null;

    /**
     * Optional. True, if the administrator can edit messages of other users and can pin messages; channels only
     */
    protected ?bool $canEditMessages = null;

    /**
     * Optional. True, if the user is allowed to pin messages; groups and supergroups only
     */
    protected ?bool $canPinMessages = null;

    /**
     * Optional. Custom title for this user
     */
    protected ?string $customTitle = null;

    /**
     * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
     */
    protected ?bool $canManageTopics = null;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function isCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function isAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function isCanManageChat(): bool
    {
        return $this->canManageChat;
    }

    public function isCanDeleteMessages(): bool
    {
        return $this->canDeleteMessages;
    }

    public function isCanManageVideoChats(): bool
    {
        return $this->canManageVideoChats;
    }

    public function isCanRestrictMembers(): bool
    {
        return $this->canRestrictMembers;
    }

    public function isCanPromoteMembers(): bool
    {
        return $this->canPromoteMembers;
    }

    public function isCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function isCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function isCanPostMessages(): bool
    {
        return $this->canPostMessages;
    }

    public function isCanEditMessages(): ?bool
    {
        return $this->canEditMessages;
    }

    public function isCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }

    public function getCanManageTopics(): ?bool
    {
        return $this->canManageTopics;
    }
}
