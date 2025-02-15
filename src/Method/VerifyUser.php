<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Verifies a user on behalf of the organization which is represented by the bot. Returns True on success.
 * @see https://telegram.org/verify#third-party-verification
 *
 * @extends Method<true>
 */
final class VerifyUser extends Method
{
    protected static string $methodName = 'verifyUser';

    public function __construct(
        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
         */
        protected string|null $customDescription = null,
    ) {
    }
}
