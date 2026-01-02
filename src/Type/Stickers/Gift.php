<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Stickers;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Chat;
use Luzrain\TelegramBotApi\Type\GiftBackground;

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
         * Optional. True, if the gift can only be purchased by Telegram Premium subscribers
         */
        public true|null $isPremium = null,

        /**
         * Optional. True, if the gift can be used (after being upgraded) to customize a user's appearance
         */
        public true|null $hasColors = null,

        /**
         * Optional. The total number of the gifts of this type that can be sent; for limited gifts only
         */
        public int|null $totalCount = null,

        /**
         * Optional. The number of remaining gifts of this type that can be sent; for limited gifts only
         */
        public int|null $remainingCount = null,

        /**
         * Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
         */
        public int|null $personalTotalCount = null,

        /**
         * Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
         */
        public int|null $personalRemainingCount = null,

        /**
         * Optional. Background of the gift
         */
        public GiftBackground|null $background = null,

        /**
         * Optional. The total number of different unique gifts that can be obtained by upgrading the gift
         */
        public int|null $uniqueGiftVariantCount = null,

        /**
         * Optional. Information about the chat that published the gift
         */
        public Chat|null $publisherChat = null,
    ) {
    }
}
