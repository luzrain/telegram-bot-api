<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about a change in the price of paid messages within a chat.
 */
final readonly class PaidMessagePriceChanged extends Type
{
    public function __construct(
        /**
         * The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
         */
        public int $paidMessageStarCount,
    ) {
    }
}
