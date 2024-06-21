<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

/**
 * Describes a withdrawal transaction with Fragment.
 */
final readonly class TransactionPartnerFragment extends TransactionPartner
{
    public const TYPE = 'fragment';

    protected function __construct(
        /**
         * Optional. State of the transaction if the transaction is outgoing
         */
        public RevenueWithdrawalState|null $withdrawalState = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
