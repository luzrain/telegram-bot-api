<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

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
    ) {
        parent::__construct(self::TYPE);
    }
}
