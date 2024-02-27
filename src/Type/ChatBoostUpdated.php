<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a boost added to a chat or changed.
 */
final readonly class ChatBoostUpdated extends Type
{
    public function __construct(
        /**
         * Chat which was boosted
         */
        public Chat $chat,

        /**
         * Information about the chat boost
         */
        public ChatBoost $boost,
    ) {
    }
}
