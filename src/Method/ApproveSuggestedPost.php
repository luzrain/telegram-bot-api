<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to approve a suggested post in a direct messages chat. The bot must have the 'can_post_messages' administrator right in the corresponding channel chat.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class ApproveSuggestedPost extends Method
{
    protected static string $methodName = 'approveSuggestedPost';

    public function __construct(
        /**
         * Unique identifier for the target direct messages chat
         */
        protected int $chatId,

        /**
         * Identifier of a suggested post message to approve
         */
        protected int $messageId,

        /**
         * Point in time (Unix timestamp) when the post is expected to be published; omit if the date has already been specified when the suggested post was created.
         * If specified, then the date must be not more than 2678400 seconds (30 days) in the future
         */
        protected int|null $sendDate = null,
    ) {
    }
}
