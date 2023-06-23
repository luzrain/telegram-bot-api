<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to clear the list of pinned messages in a forum topic.
 * The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup.
 * Returns True on success.
 */
final class UnpinAllForumTopicMessages extends BaseMethod
{
    protected static string $methodName = 'unpinAllForumTopicMessages';

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
