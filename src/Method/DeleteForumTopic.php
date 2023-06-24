<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to delete a forum topic along with all its messages in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must have the can_delete_messages administrator rights.
 * Returns True on success.
 *
 * @extends BaseMethod<true>
 */
final class DeleteForumTopic extends BaseMethod
{
    protected static string $methodName = 'deleteForumTopic';

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
