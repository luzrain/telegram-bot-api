<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to decline a suggested post in a direct messages chat. The bot must have the 'can_manage_direct_messages' administrator right in the corresponding channel chat.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class DeclineSuggestedPost extends Method
{
    protected static string $methodName = 'declineSuggestedPost';

    public function __construct(
        /**
         * Unique identifier for the target direct messages chat
         */
        protected int $chatId,

        /**
         * Identifier of a suggested post message to decline
         */
        protected int $messageId,

        /**
         * Comment for the creator of the suggested post; 0-128 characters
         */
        protected string|null $comment = null,
    ) {
    }
}
