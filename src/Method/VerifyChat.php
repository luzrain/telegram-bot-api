<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Verifies a chat on behalf of the organization which is represented by the bot. Returns True on success.
 * @see https://telegram.org/verify#third-party-verification
 *
 * @extends Method<true>
 */
final class VerifyChat extends Method
{
    protected static string $methodName = 'verifyChat';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
         */
        protected string|null $customDescription = null,
    ) {
    }
}
