<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to revoke the current token of a managed bot and generate a new one. Returns the new token as String on success.
 *
 * @extends Method<string>
 */
final class ReplaceManagedBotToken extends Method
{
    protected static string $methodName = 'replaceManagedBotToken';

    public function __construct(
        /**
         * User identifier of the managed bot whose token will be replaced
         */
        protected int $userId,
    ) {
    }
}
