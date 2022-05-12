<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ChatPermissions;

/**
 * Use this method to restrict a user in a supergroup.
 * The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights.
 * Pass True for all permissions to lift restrictions from a user. Returns True on success.
 */
final class RestrictChatMember extends BaseMethod
{
    protected static string $methodName = 'restrictChatMember';

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
         * A JSON-serialized object for new user permissions
         */
        protected ChatPermissions $permissions,

        /**
         * Date when restrictions will be lifted for the user, unix time.
         * If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
         */
        protected bool|null $untilDate = null,
    ) {
    }
}
