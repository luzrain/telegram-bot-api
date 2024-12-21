<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

/**
 * Describes a transaction with payment for paid broadcasting.
 */
final readonly class TransactionPartnerTelegramApi extends TransactionPartner
{
    public const TYPE = 'telegram_api';

    protected function __construct(
        /**
         * The number of successful requests that exceeded regular limits and were therefore billed
         */
        public int $requestCount,
    ) {
        parent::__construct(self::TYPE);
    }
}
