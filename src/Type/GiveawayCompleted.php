<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 */
final readonly class GiveawayCompleted extends Type
{
    protected function __construct(
        /**
         * Number of winners in the giveaway
         */
        public int $winnerCount,

        /**
         * Optional. Number of undistributed prizes
         */
        public int|null $unclaimedPrizeCount = null,

        /**
         * Optional. Message with the giveaway that was completed, if it wasn't deleted
         */
        public Message|null $giveawayMessage = null,

        /**
         * Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
         */
        public true|null $isStarGiveaway = null,
    ) {
    }
}
