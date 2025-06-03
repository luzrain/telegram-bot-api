<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Transfers Telegram Stars from the business account balance to the bot's balance. Requires the can_transfer_stars business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class TransferBusinessAccountStars extends Method
{
    protected static string $methodName = 'transferBusinessAccountStars';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Number of Telegram Stars to transfer; 1-10000
         */
        protected int $starCount,
    ) {
    }
}
