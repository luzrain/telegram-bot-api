<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to get the token of a managed bot. Returns the token as String on success.
 *
 * @extends Method<string>
 */
final class GetManagedBotToken extends Method
{
    protected static string $methodName = 'getManagedBotToken';

    public function __construct(
        /**
         * User identifier of the managed bot whose token will be returned
         */
        protected int $userId,
    ) {
    }
}
