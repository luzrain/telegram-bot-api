<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 */
final readonly class TransactionPartnerTelegramAds extends TransactionPartner
{
    public const TYPE = 'telegram_ads';

    protected function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
