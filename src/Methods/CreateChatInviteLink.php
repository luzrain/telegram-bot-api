<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ChatInviteLink;

/**
 * Use this method to create an additional invite link for a chat.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * The link can be revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
 */
final class CreateChatInviteLink extends BaseMethod
{
    protected static string $methodName = 'createChatInviteLink';
    protected static string $responseClass = ChatInviteLink::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Invite link name; 0-32 characters
         */
        protected string|null $name = null,

        /**
         * Point in time (Unix timestamp) when the link will expire
         */
        protected int|null $expireDate = null,

        /**
         * Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
         */
        protected int|null $memberLimit = null,

        /**
         * True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
         */
        protected bool|null $createsJoinRequest = null,
    ) {
    }
}
