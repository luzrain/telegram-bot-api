<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Contains information about the affiliate that received a commission via this transaction.
 */
final readonly class AffiliateInfo extends Type
{
    protected function __construct(
        /**
         * The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
         */
        public int $commissionPerMille,

        /**
         * Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
         */
        public int $amount,

        /**
         * Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
         */
        public User|null $affiliateUser = null,

        /**
         * Optional. The chat that received an affiliate commission if it was received by a chat
         */
        public Chat|null $affiliateChat = null,

        /**
         * Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate;
         * from -999999999 to 999999999; can be negative for refunds
         */
        public int|null $nanostarAmount = null,
    ) {
    }
}
