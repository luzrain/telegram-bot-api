<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to promote or demote a user in a supergroup or a channel.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Pass False for all boolean parameters to demote a user. Returns True on success.
 */
final class PromoteChatMember extends BaseMethod
{
    protected static string $methodName = 'promoteChatMember';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * Pass True, if the administrator's presence in the chat is hidden
         */
        protected bool|null $isAnonymous = null,

        /**
         * Pass True, if the administrator can access the chat event log, chat statistics, message statistics in channels,
         * see channel members, see anonymous administrators in supergroups and ignore slow mode.
         * Implied by any other administrator privilege
         */
        protected bool|null $canManageChat = null,

        /**
         * Pass True, if the administrator can create channel posts, channels only
         */
        protected bool|null $canPostMessages = null,

        /**
         * Pass True, if the administrator can edit messages of other users and can pin messages, channels only
         */
        protected bool|null $canEditMessages = null,

        /**
         * Pass True, if the administrator can delete messages of other users
         */
        protected bool|null $canDeleteMessages = null,

        /**
         * Pass True, if the administrator can manage video chats
         */
        protected bool|null $canManageVideoChats = null,

        /**
         * Pass True, if the administrator can restrict, ban or unban chat members
         */
        protected bool|null $canRestrictMembers = null,

        /**
         * Pass True, if the administrator can add new administrators with a subset of their own privileges or demote
         * administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by him)
         */
        protected bool|null $canPromoteMembers = null,

        /**
         * Pass True, if the administrator can change chat title, photo and other settings
         */
        protected bool|null $canChangeInfo = null,

        /**
         * Pass True, if the administrator can invite new users to the chat
         */
        protected bool|null $canInviteUsers = null,

        /**
         * Pass True, if the administrator can pin messages, supergroups only
         */
        protected bool|null $canPinMessages = null,

        /**
         * Pass True if the user is allowed to create, rename, close, and reopen forum topics, supergroups only
         */
        protected bool|null $canManageTopics = null,
    ) {
    }
}
