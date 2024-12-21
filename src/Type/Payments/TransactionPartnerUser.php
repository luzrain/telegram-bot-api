<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Internal\ArrayType;
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
         * Information about the user
         */
        public User $user,

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
    ) {
        parent::__construct(self::TYPE);
    }
}
