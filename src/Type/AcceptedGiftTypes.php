<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the types of gifts that can be gifted to a user or a chat.
 */
final readonly class AcceptedGiftTypes extends Type
{
    public function __construct(
        /**
         * True, if unlimited regular gifts are accepted
         */
        public bool $unlimitedGifts,

        /**
         * True, if limited regular gifts are accepted
         */
        public bool $limitedGifts,

        /**
         * True, if unique gifts or gifts that can be upgraded to unique for free are accepted
         */
        public bool $uniqueGifts,

        /**
         * True, if a Telegram Premium subscription is accepted
         */
        public bool $premiumSubscription,

        /**
         * True, if transfers of unique gifts from channels are accepted
         */
        public bool $giftsFromChannels,
    ) {
    }
}
