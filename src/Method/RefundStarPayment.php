<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Refunds a successful payment in Telegram Stars. Returns True on success.
 *
 * @extends Method<true>
 */
final class RefundStarPayment extends Method
{
    protected static string $methodName = 'refundStarPayment';

    public function __construct(
        /**
         * Identifier of the user whose payment will be refunded
         */
        protected int $userId,

        /**
         * Telegram payment identifier
         */
        protected string $telegramPaymentChargeId,
    ) {
    }
}
