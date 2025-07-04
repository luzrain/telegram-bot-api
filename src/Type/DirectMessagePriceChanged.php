<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 */
final readonly class DirectMessagePriceChanged extends Type
{
    protected function __construct(
        /**
         * True, if direct messages are enabled for the channel chat; false otherwise
         */
        public bool $areDirectMessagesEnabled,

        /**
         * Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel.
         * Does not apply to users who have been exempted by administrators. Defaults to 0.
         */
        public int|null $directMessageStarCount = null,
    ) {
    }
}
