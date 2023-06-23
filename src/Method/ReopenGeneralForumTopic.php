<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to reopen a closed 'General' topic in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights.
 * The topic will be automatically unhidden if it was hidden.
 * Returns True on success.
 */
final class ReopenGeneralForumTopic extends BaseMethod
{
    protected static string $methodName = 'reopenGeneralForumTopic';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,
    ) {
    }
}
