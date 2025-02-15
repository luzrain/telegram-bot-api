<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Removes verification from a user who is currently verified on behalf of the organization represented by the bot. Returns True on success.
 * @see https://telegram.org/verify#third-party-verification
 *
 * @extends Method<true>
 */
final class RemoveUserVerification extends Method
{
    protected static string $methodName = 'removeUserVerification';

    public function __construct(
        /**
         * Unique identifier of the target user
         */
        protected int $userId,
    ) {
    }
}
