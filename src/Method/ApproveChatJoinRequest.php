<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to approve a chat join request.
 * The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right.
 * Returns True on success.
 */
final class ApproveChatJoinRequest extends BaseMethod
{
    protected static string $methodName = 'approveChatJoinRequest';

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
