<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Changes the first and last name of a managed business account. Requires the can_change_name business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetBusinessAccountName extends Method
{
    protected static string $methodName = 'setBusinessAccountName';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * The new value of the first name for the business account; 1-64 characters
         */
        protected string $firstName,

        /**
         * The new value of the last name for the business account; 0-64 characters
         */
        protected string|null $lastName = null,
    ) {
    }
}
