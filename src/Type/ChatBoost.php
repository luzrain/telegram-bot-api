<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object contains information about a chat boost.
 */
final readonly class ChatBoost extends Type implements TypeDenormalizable
{
    public function __construct(
        /**
         * Unique identifier of the boost
         */
        public string $boostId,

        /**
         * Point in time (Unix timestamp) when the chat was boosted
         */
        public int $addDate,

        /**
         * Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
         */
        public int $expirationDate,

        /**
         * Source of the added boost
         */
        public ChatBoostSource $source,
    ) {
    }
}
