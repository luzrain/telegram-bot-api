<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 */
final readonly class GiveawayCompleted extends Type implements TypeDenormalizable
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
    ) {
    }
}
