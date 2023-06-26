<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to close an open topic in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights,
 * unless it is the creator of the topic.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class CloseForumTopic extends Method
{
    protected static string $methodName = 'closeForumTopic';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier for the target message thread of the forum topic
         */
        protected int $messageThreadId,
    ) {
    }
}
