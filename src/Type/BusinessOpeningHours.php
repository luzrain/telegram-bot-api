<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes the opening hours of a business.
 */
final readonly class BusinessOpeningHours extends Type
{
    public function __construct(
        /**
         * Unique name of the time zone for which the opening hours are defined
         */
        public string $timeZoneName,

        /**
         * List of time intervals describing business opening hours
         *
         * @var list<BusinessOpeningHoursInterval>
         */
        #[ArrayType(BusinessOpeningHoursInterval::class)]
        public array $openingHours,
    ) {
    }
}
