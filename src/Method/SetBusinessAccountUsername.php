<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Changes the username of a managed business account. Requires the can_change_username business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetBusinessAccountUsername extends Method
{
    protected static string $methodName = 'setBusinessAccountUsername';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * The new value of the username for the business account; 0-32 characters
         */
        protected string|null $username = null,
    ) {
    }
}
