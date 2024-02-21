<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * The reaction is based on a custom emoji.
 */
final readonly class ReactionTypeCustomEmoji extends ReactionType
{
    public function __construct(
        /**
         * Custom emoji identifier
         */
        public string $customEmojiId,
    ) {
        parent::__construct('custom_emoji');
    }
}
