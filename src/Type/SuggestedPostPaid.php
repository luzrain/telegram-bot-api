<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about a successful payment for a suggested post.
 */
final readonly class SuggestedPostPaid extends Type
{
    protected function __construct(
        /**
         * Currency in which the payment was made. Currently, one of "XTR" for Telegram Stars or "TON" for toncoins
         */
        public string $currency,

        /**
         * Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
         */
        public Message|null $suggestedPostMessage = null,

        /**
         * Optional. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only
         */
        public int|null $amount = null,

        /**
         * Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
         */
        public StarAmount|null $starAmount = null,
    ) {
    }
}
