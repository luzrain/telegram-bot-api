<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type\User;

/**
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 */
final readonly class TransactionPartnerAffiliateProgram extends TransactionPartner
{
    public const TYPE = 'affiliate_program';

    protected function __construct(

        /**
         * The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
         */
        public int $commissionPerMille,

        /**
         * Optional. Information about the bot that sponsored the affiliate program
         */
        public User|null $sponsorUser = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
