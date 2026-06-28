<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to promote or demote a user in a supergroup or a channel.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Pass False for all boolean parameters to demote a user. Returns True on success.
 *
 * @extends Method<true>
 */
final class PromoteChatMember extends Method
{
    protected static string $methodName = 'promoteChatMember';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel in the format @username
         */
        protected int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * Pass True if the administrator's presence in the chat is hidden
         */
        protected bool|null $isAnonymous = null,

        /**
         * Pass True if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages,
         * ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
         */
        protected bool|null $canManageChat = null,

        /**
         * Pass True if the administrator can delete messages of other users
         */
        protected bool|null $canDeleteMessages = null,

        /**
         * Pass True if the administrator can manage video chats
         */
        protected bool|null $canManageVideoChats = null,

        /**
         * Pass True if the administrator can restrict, ban or unban chat members, or access supergroup statistics.
         * For backward compatibility, defaults to True for promotions of channel administrators.
         */
        protected bool|null $canRestrictMembers = null,

        /**
         * Pass True if the administrator can add new administrators with a subset of their own privileges or demote
         * administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
         */
        protected bool|null $canPromoteMembers = null,

        /**
         * Pass True if the administrator can change chat title, photo and other settings
         */
        protected bool|null $canChangeInfo = null,

        /**
         * Pass True if the administrator can invite new users to the chat
         */
        protected bool|null $canInviteUsers = null,

        /**
         * Pass True if the administrator can post stories to the chat
         */
        protected bool|null $canPostStories = null,

        /**
         * Pass True if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
         */
        protected bool|null $canEditStories = null,

        /**
         * Pass True if the administrator can delete stories posted by other users
         */
        protected bool|null $canDeleteStories = null,

        /**
         * Pass True if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
         */
        protected bool|null $canPostMessages = null,

        /**
         * Pass True if the administrator can edit messages of other users and can pin messages; for channels only
         */
        protected bool|null $canEditMessages = null,

        /**
         * Pass True if the administrator can pin messages; for supergroups only
         */
        protected bool|null $canPinMessages = null,

        /**
         * Pass True if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
         */
        protected bool|null $canManageTopics = null,

        /**
         * Pass True if the administrator can manage direct messages within the channel and decline suggested posts; for channels only
         */
        protected bool|null $canManageDirectMessages = null,

        /**
         * Pass True if the administrator can edit the tags of regular members; for groups and supergroups only
         */
        protected bool|null $canManageTags = null,
    ) {
    }
}
