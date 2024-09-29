<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about a paid media purchase.
 */
final readonly class PaidMediaPurchased extends Type
{
    protected function __construct(
        /**
         * User who purchased the media
         */
        public User $from,

        /**
         * Bot-specified paid media payload
         */
        public string $paidMediaPayload,
    ) {
    }
}
