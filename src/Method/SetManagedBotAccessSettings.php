<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to change the access settings of a managed bot. Returns True on success.
 *
 * @extends Method<true>
 */
final class SetManagedBotAccessSettings extends Method
{
    protected static string $methodName = 'setManagedBotAccessSettings';

    public function __construct(
        /**
         * User identifier of the managed bot whose access settings will be changed
         */
        protected int $userId,

        /**
         * Pass True, if only selected users can access the bot. The bot's owner can always access it.
         */
        protected bool $isAccessRestricted,

        /**
         * A JSON-serialized list of up to 10 identifiers of users who will have access to the bot in addition to its owner. Ignored if is_access_restricted is false.
         *
         * @var list<int>|null
         */
        protected array|null $addedUserIds = null,
    ) {
    }
}
