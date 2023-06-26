<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to edit the name of the 'General' topic in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class EditGeneralForumTopic extends Method
{
    protected static string $methodName = 'editGeneralForumTopic';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,

        /**
         * New topic name, 1-128 characters
         */
        protected string $name,
    ) {
    }
}
