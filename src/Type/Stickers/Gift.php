<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Stickers;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a gift that can be sent by the bot.
 */
final readonly class Gift extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the gift
         */
        public string $id,

        /**
         * The sticker that represents the gift
         */
        public Sticker $sticker,

        /**
         * The number of Telegram Stars that must be paid to send the sticker
         */
        public int $starCount,

        /**
         * Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
         */
        public int|null $upgradeStarCount = null,

        /**
         * Optional. The total number of the gifts of this type that can be sent; for limited gifts only
         */
        public int|null $totalCount = null,

        /**
         * Optional. The number of remaining gifts of this type that can be sent; for limited gifts only
         */
        public int|null $remainingCount = null,
    ) {
    }
}
