<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

/**
 * Describes a transaction with an unknown source or recipient.
 */
final readonly class TransactionPartnerOther extends TransactionPartner
{
    public const TYPE = 'other';

    protected function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
