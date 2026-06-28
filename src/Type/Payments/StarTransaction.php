<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a Telegram Star transaction. Note that if the buyer initiates a chargeback with the payment provider from whom they acquired Stars
 * (e.g., Apple, Google) following this transaction, the refunded Stars will be deducted from the bot's balance. This is outside of Telegram's control.
 */
final readonly class StarTransaction extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions.
         * Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
         */
        public string $id,

        /**
         * Integer amount of Telegram Stars transferred by the transaction
         */
        public int $amount,

        /**
         * Date the transaction was created in Unix time
         */
        public int $date,

        /**
         * Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
         */
        public int|null $nanostarAmount = null,

        /**
         * Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal).
         * Only for incoming transactions.
         */
        public TransactionPartner|null $source = null,

        /**
         * Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal).
         * Only for outgoing transactions.
         */
        public TransactionPartner|null $receiver = null,
    ) {
    }
}
