<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a service message about a user boosting a chat.
 */
final readonly class ChatBoostAdded extends Type
{
    public function __construct(
        /**
         * Number of boosts added by the user
         */
        public int $boostCount,
    ) {
    }
}
