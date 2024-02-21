<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The boost was obtained by the creation of a Telegram Premium giveaway.
 * This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 */
final readonly class ChatBoostSourceGiveaway extends ChatBoostSource
{
    public const SOURCE = 'giveaway';

    public function __construct(
        /**
         * Identifier of a message in the chat with the giveaway; the message could have been deleted already.
         * May be 0 if the message isn't sent yet.
         */
        public int $giveawayMessageId,

        /**
         * Optional. User that won the prize in the giveaway if any
         */
        public User|null $user = null,

        /**
         * Optional. True, if the giveaway was completed, but there was no user to win the prize
         */
        public true|null $isUnclaimed = null,
    ) {
        parent::__construct(self::SOURCE);
    }
}
