<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Removes verification from a chat that is currently verified on behalf of the organization represented by the bot. Returns True on success.
 * @see https://telegram.org/verify#third-party-verification
 *
 * @extends Method<true>
 */
final class RemoveChatVerification extends Method
{
    protected static string $methodName = 'removeChatVerification';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
