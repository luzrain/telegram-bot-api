<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes a unique gift that was upgraded from a regular gift.
 */
final readonly class UniqueGift extends Type
{
    public function __construct(
        /**
         * Human-readable name of the regular gift from which this unique gift was upgraded
         */
        public string $baseName,

        /**
         * Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
         */
        public string $name,

        /**
         * Unique number of the upgraded gift among gifts upgraded from the same regular gift
         */
        public int $number,

        /**
         * Model of the gift
         */
        public UniqueGiftModel $model,

        /**
         * Symbol of the gift
         */
        public UniqueGiftSymbol $symbol,

        /**
         * Backdrop of the gift
         */
        public UniqueGiftBackdrop $backdrop,
    ) {
    }
}
