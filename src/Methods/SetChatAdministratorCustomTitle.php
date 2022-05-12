<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method to set a custom title for an administrator in a supergroup promoted by the bot.
 * Returns True on success.
 */
final class SetChatAdministratorCustomTitle extends BaseMethod
{
    protected static string $methodName = 'setChatAdministratorCustomTitle';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * New custom title for the administrator; 0-16 characters, emoji are not allowed
         */
        protected string $customTitle,
    ) {
    }
}
