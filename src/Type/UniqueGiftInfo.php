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
         * Origin of the gift. Currently, either "upgrade" for gifts upgraded from regular gifts, "transfer" for gifts transferred from other users or channels,
         * or "resale" for gifts bought from other users
         */
        public string $origin,

        /**
         * Optional. For gifts bought from other users, the price paid for the gift
         */
        public int|null $lastResaleStarCount = null,

        /**
         * Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
         */
        public string|null $ownedGiftId = null,

        /**
         * Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
         */
        public int|null $transferStarCount = null,

        /**
         * Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
         */
        public int|null $nextTransferDate = null,
    ) {
    }
}
