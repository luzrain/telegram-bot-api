<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about a unique gift that was sent or received.
 */
final readonly class UniqueGiftInfo extends Type
{
    public function __construct(
        /**
         * Information about the gift
         */
        public UniqueGift $gift,

        /**
         * Origin of the gift. Currently, either "upgrade" or "transfer"
         */
        public string $origin,

        /**
         * Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
         */
        public string|null $ownedGiftId = null,

        /**
         * Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
         */
        public int|null $transferStarCount = null,
    ) {
    }
}
