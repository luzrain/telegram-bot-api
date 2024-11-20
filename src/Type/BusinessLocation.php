<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Contains information about the location of a Telegram Business account.
 */
final readonly class BusinessLocation extends Type
{
    public function __construct(
        /**
         * Address of the business
         */
        public string $address,

        /**
         * Optional. Location of the business
         */
        public Location|null $location = null,
    ) {
    }
}
