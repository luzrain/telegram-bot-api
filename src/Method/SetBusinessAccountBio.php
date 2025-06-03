<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Changes the bio of a managed business account. Requires the can_change_bio business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetBusinessAccountBio extends Method
{
    protected static string $methodName = 'setBusinessAccountBio';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * The new value of the bio for the business account; 0-140 characters
         */
        protected string|null $bio = null,
    ) {
    }
}
