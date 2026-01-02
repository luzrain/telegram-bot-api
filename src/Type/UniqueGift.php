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
         * Identifier of the regular gift from which the gift was upgraded
         */
        public string $giftId,

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

        /**
         * Optional. True, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
         */
        public true|null $isPremium = null,

        /**
         * Optional. True, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
         */
        public true|null $isFromBlockchain = null,

        /**
         * Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews;
         * for business account gifts and gifts that are currently on sale only
         */
        public UniqueGiftColors|null $colors = null,

        /**
         * Optional. Information about the chat that published the gift
         */
        public Chat|null $publisherChat = null,
    ) {
    }
}
