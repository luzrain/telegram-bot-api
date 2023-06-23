<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Represents the rights of an administrator in a chat.
 */
class ChatAdministratorRights extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
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
    ];

    /**
     * True, if the user's presence in the chat is hidden
     */
    protected bool $isAnonymous;

    /**
     * True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see
     * channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
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
     * True, if the administrator can add new administrators with a subset of their own privileges or demoteadministrators
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
     * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
     */
    protected ?bool $canManageTopics = null;

    public static function create(
        bool $isAnonymous,
        bool $canManageChat,
        bool $canDeleteMessages,
        bool $canManageVideoChats,
        bool $canRestrictMembers,
        bool $canPromoteMembers,
        bool $canChangeInfo,
        bool $canInviteUsers,
        ?bool $canPostMessages = null,
        ?bool $canEditMessages = null,
        ?bool $canPinMessages = null,
        ?bool $canManageTopics = null,
    ): self {
        $instance = new self();
        $instance->isAnonymous = $isAnonymous;
        $instance->canManageChat = $canManageChat;
        $instance->canDeleteMessages = $canDeleteMessages;
        $instance->canManageVideoChats = $canManageVideoChats;
        $instance->canRestrictMembers = $canRestrictMembers;
        $instance->canPromoteMembers = $canPromoteMembers;
        $instance->canChangeInfo = $canChangeInfo;
        $instance->canInviteUsers = $canInviteUsers;
        $instance->canPostMessages = $canPostMessages;
        $instance->canEditMessages = $canEditMessages;
        $instance->canPinMessages = $canPinMessages;
        $instance->canManageTopics = $canManageTopics;

        return $instance;
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

    public function isCanPostMessages(): ?bool
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

    public function getCanManageTopics(): ?bool
    {
        return $this->canManageTopics;
    }
}
