<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

/**
 * The withdrawal succeeded.
 */
final readonly class RevenueWithdrawalStateSucceeded extends RevenueWithdrawalState
{
    public const TYPE = 'succeeded';

    protected function __construct(
        /**
         * Date the withdrawal was completed in Unix time
         */
        public int $date,

        /**
         * An HTTPS URL that can be used to see transaction details
         */
        public string $url,
    ) {
        parent::__construct(self::TYPE);
    }
}
