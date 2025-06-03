<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\StarAmount;

/**
 * Returns the amount of Telegram Stars owned by a managed business account. Requires the can_view_gifts_and_stars business bot right.
 * Returns StarAmount on success.
 *
 * @extends Method<StarAmount>
 */
final class GetBusinessAccountStarBalance extends Method
{
    protected static string $methodName = 'getBusinessAccountStarBalance';
    protected static string $responseClass = StarAmount::class;

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,
    ) {
    }
}
