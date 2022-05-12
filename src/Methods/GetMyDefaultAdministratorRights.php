<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ChatAdministratorRights;

/**
 * Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
 */
final class GetMyDefaultAdministratorRights extends BaseMethod
{
    protected static string $methodName = 'getMyDefaultAdministratorRights';
    protected static string $responseClass = ChatAdministratorRights::class;

    public function __construct(

        /**
         * Pass True to get default administrator rights of the bot in channels.
         * Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
         */
        protected bool|null $forChannels = null,
    ) {
    }
}
