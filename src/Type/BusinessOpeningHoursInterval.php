<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes an interval of time during which a business is open.
 */
final readonly class BusinessOpeningHoursInterval extends Type
{
    public function __construct(
        /**
         * The minute's sequence number in a week, starting on Monday,
         * marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
         */
        public int $openingMinute,

        /**
         * The minute's sequence number in a week, starting on Monday,
         * marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
         */
        public int $closingMinute,
    ) {
    }
}
