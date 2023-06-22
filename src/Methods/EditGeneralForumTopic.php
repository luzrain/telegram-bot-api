<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method to edit the name of the 'General' topic in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights.
 * Returns True on success.
 */
final class EditGeneralForumTopic extends BaseMethod
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
