<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

/**
 * The withdrawal failed and the transaction was refunded.
 */
final readonly class RevenueWithdrawalStateFailed extends RevenueWithdrawalState
{
    public const TYPE = 'failed';

    protected function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
