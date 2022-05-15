<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ChatPermissions;

/**
 * Use this method to set default chat permissions for all members.
 * The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights.
 * Returns True on success.
 */
final class SetChatPermissions extends BaseMethod
{
    protected static string $methodName = 'setChatPermissions';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,

        /**
         * A JSON-serialized object for new default chat permissions
         */
        protected ChatPermissions $permissions,
    ) {
    }
}
