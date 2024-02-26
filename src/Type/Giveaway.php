<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a message about a scheduled giveaway.
 */
final readonly class Giveaway extends Type
{
    protected function __construct(
        /**
         * The list of chats which the user must join to participate in the giveaway
         *
         * @var list<Chat>
         */
        #[ArrayType(Chat::class)]
        public array $chats,

        /**
         * Point in time (Unix timestamp) when winners of the giveaway will be selected
         */
        public int $winnersSelectionDate,

        /**
         * The number of users which are supposed to be selected as winners of the giveaway
         */
        public int $winnerCount,

        /**
         * Optional. True, if only users who join the chats after the giveaway started should be eligible to win
         */
        public true|null $onlyNewMembers = null,

        /**
         * Optional. True, if the list of giveaway winners will be visible to everyone
         */
        public true|null $hasPublicWinners = null,

        /**
         * Optional. Description of additional giveaway prize
         */
        public string|null $prizeDescription = null,

        /**
         * Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users
         * for the giveaway must come. If empty, then all users can participate in the giveaway.
         * Users with a phone number that was bought on Fragment can always participate in giveaways.
         *
         * @var list<string>|null
         */
        public array|null $countryCodes = null,

        /**
         * Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for
         */
        public int|null $premiumSubscriptionMonthCount = null,
    ) {
    }
}
