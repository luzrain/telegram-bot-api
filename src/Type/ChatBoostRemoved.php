<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a boost removed from a chat.
 */
final readonly class ChatBoostRemoved extends Type
{
    public function __construct(
        /**
         * Chat which was boosted
         */
        public Chat $chat,

        /**
         * Unique identifier of the boost
         */
        public string $boostId,

        /**
         * Point in time (Unix timestamp) when the boost was removed
         */
        public int $removeDate,

        /**
         * Source of the removed boost
         */
        public ChatBoostSource $source,
    ) {
    }
}
