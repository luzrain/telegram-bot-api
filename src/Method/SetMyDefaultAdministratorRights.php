<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\ChatAdministratorRights;

/**
 * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels.
 * These rights will be suggested to users, but they are are free to modify the list before adding the bot. Returns True on success.
 */
final class SetMyDefaultAdministratorRights extends BaseMethod
{
    protected static string $methodName = 'setMyDefaultAdministratorRights';

    public function __construct(

        /**
         * A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
         */
        protected ChatAdministratorRights|null $rights = null,

        /**
         * Pass True to change the default administrator rights of the bot in channels.
         * Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
         */
        protected bool|null $forChannels = null,
    ) {
    }
}
