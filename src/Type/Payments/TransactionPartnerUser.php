<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\AffiliateInfo;
use Luzrain\TelegramBotApi\Type\PaidMedia;
use Luzrain\TelegramBotApi\Type\Stickers\Gift;
use Luzrain\TelegramBotApi\Type\User;

/**
 * Describes a transaction with a user.
 */
final readonly class TransactionPartnerUser extends TransactionPartner
{
    public const TYPE = 'user';

    protected function __construct(

        /**
         * Type of the transaction, currently one of "invoice_payment" for payments via invoices, "paid_media_payment" for payments for paid media, "gift_purchase" for gifts sent by the bot,
         * "premium_purchase" for Telegram Premium subscriptions gifted by the bot, "business_account_transfer" for direct transfers from managed business accounts
         */
        public string $transactionType,

        /**
         * Information about the user
         */
        public User $user,

        /**
         * Optional. Information about the affiliate that received a commission via this transaction
         */
        public AffiliateInfo|null $affiliate = null,

        /**
         * Optional. Bot-specified invoice payload
         */
        public string|null $invoicePayload = null,

        /**
         * Optional. The duration of the paid subscription
         */
        public int|null $subscriptionPeriod = null,

        /**
         * Optional. Information about the paid media bought by the user
         *
         * @var list<PaidMedia>|null
         */
        #[ArrayType(PaidMedia::class)]
        public array|null $paidMedia = null,

        /**
         * Optional. Bot-specified paid media payload
         */
        public string|null $paidMediaPayload = null,

        /**
         * Optional. The gift sent to the user by the bot
         */
        public Gift|null $gift = null,

        /**
         * Optional. Number of months the gifted Telegram Premium subscription will be active for; for "premium_purchase" transactions only
         */
        public int|null $premiumSubscriptionDuration = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
