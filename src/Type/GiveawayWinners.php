<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a message about the completion of a giveaway with public winners.
 */
final readonly class GiveawayWinners extends Type
{
    protected function __construct(
        /**
         * The chat that created the giveaway
         */
        public Chat $chat,

        /**
         * Identifier of the message with the giveaway in the chat
         */
        public int $giveawayMessageId,

        /**
         * Point in time (Unix timestamp) when winners of the giveaway were selected
         */
        public int $winnersSelectionDate,

        /**
         * Total number of winners in the giveaway
         */
        public int $winnerCount,

        /**
         * List of up to 100 winners of the giveaway
         *
         * @var list<User>
         */
        #[ArrayType(User::class)]
        public array $winners,

        /**
         * Optional. The number of other chats the user had to join in order to be eligible for the giveaway
         */
        public int|null $additionalChatCount = null,
        /**
         * Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for
         */
        public int|null $premiumSubscriptionMonthCount = null,

        /**
         * Optional. Number of undistributed prizes
         */
        public int|null $unclaimedPrizeCount = null,

        /**
         * Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
         */
        public true|null $onlyNewMembers = null,

        /**
         * Optional. True, if the giveaway was canceled because the payment for it was refunded
         */
        public true|null $wasRefunded = null,

        /**
         * Optional. Description of additional giveaway prize
         */
        public string|null $prizeDescription = null,
    ) {
    }
}
