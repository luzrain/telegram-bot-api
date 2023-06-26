<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to hide the 'General' topic in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights.
 * The topic will be automatically closed if it was open.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class HideGeneralForumTopic extends Method
{
    protected static string $methodName = 'hideGeneralForumTopic';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,
    ) {
    }
}
