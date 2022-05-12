<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method to decline a chat join request.
 * The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right.
 * Returns True on success.
 */
final class DeclineChatJoinRequest extends BaseMethod
{
    protected static string $methodName = 'declineChatJoinRequest';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        protected int $userId,
    ) {
    }
}
