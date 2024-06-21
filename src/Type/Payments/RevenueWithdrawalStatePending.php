<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

/**
 * The withdrawal is in progress.
 */
final readonly class RevenueWithdrawalStatePending extends RevenueWithdrawalState
{
    public const TYPE = 'pending';

    protected function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
