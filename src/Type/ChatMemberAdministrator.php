<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that has some additional privileges.
 */
final readonly class ChatMemberAdministrator extends ChatMember
{
    public const STATUS = 'administrator';

    protected function __construct(
        /**
         * Information about the user
         */
        public User $user,

        /**
         * True, if the bot is allowed to edit administrator privileges of that user
         */
        public bool $canBeEdited,

        /**
         * True, if the user's presence in the chat is hidden
         */
        public bool $isAnonymous,

        /**
         * True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages,
         * ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
         */
        public bool $canManageChat,

        /**
         * True, if the administrator can delete messages of other users
         */
        public bool $canDeleteMessages,

        /**
         * True, if the administrator can manage video chats
         */
        public bool $canManageVideoChats,

        /**
         * True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
         */
        public bool $canRestrictMembers,

        /**
         * True, if the administrator can add new administrators with a subset of their own privileges or demote administrators
         * that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
         */
        public bool $canPromoteMembers,

        /**
         * True, if the user is allowed to change the chat title, photo and other settings
         */
        public bool $canChangeInfo,

        /**
         * True, if the user is allowed to invite new users to the chat
         */
        public bool $canInviteUsers,

        /**
         * True, if the administrator can post stories to the chat
         */
        public bool|null $canPostStories = null,

        /**
         * True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
         */
        public bool|null $canEditStories = null,

        /**
         * True, if the administrator can delete stories posted by other users
         */
        public bool|null $canDeleteStories = null,

        /**
         * Optional. True, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
         */
        public bool|null $canPostMessages = null,

        /**
         * Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
         */
        public bool|null $canEditMessages = null,

        /**
         * Optional. True, if the user is allowed to pin messages; for groups and supergroups only
         */
        public bool|null $canPinMessages = null,

        /**
         * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
         */
        public bool|null $canManageTopics = null,

        /**
         * Optional. True, if the administrator can manage direct messages of the channel and decline suggested posts; for channels only
         */
        public bool|null $canManageDirectMessages = null,

        /**
         * Optional. True, if the administrator can edit the tags of regular members; for groups and supergroups only. If omitted defaults to the value of can_pin_messages.
         */
        public bool|null $canManageTags = null,

        /**
         * Optional. Custom title for this user
         */
        public string|null $customTitle = null,
    ) {
        parent::__construct(self::STATUS);
    }
}
