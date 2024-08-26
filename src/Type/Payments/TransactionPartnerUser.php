<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\PaidMedia;
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
         * Optional. Information about the paid media bought by the user
         *
         * @var list<PaidMedia>|null
         */
        #[ArrayType(PaidMedia::class)]
        public array|null $paidMedia = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
