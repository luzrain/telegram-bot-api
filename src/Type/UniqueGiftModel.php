<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

/**
 * This object describes the model of a unique gift.
 */
final readonly class UniqueGiftModel extends Type
{
    public function __construct(
        /**
         * Name of the model
         */
        public string $name,

        /**
         * The sticker that represents the unique gift
         */
        public Sticker $sticker,

        /**
         * The number of unique gifts that receive this model for every 1000 gift upgrades. Always 0 for crafted gifts.
         */
        public int $rarityPerMille,

        /**
         * Optional. Rarity of the model if it is a crafted model. Currently, can be "uncommon", "rare", "epic", or "legendary".
         */
        public string|null $rarity = null,
    ) {
    }
}
