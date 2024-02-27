<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents an animated emoji that displays a random value.
 */
final readonly class Dice extends Type
{
    protected function __construct(
        /**
         * Emoji on which the dice throw animation is based
         */
        public string $emoji,

        /**
         * Value of the dice, 1-6 for "🎲", "🎯" and "🎳" base emoji, 1-5 for "🏀" and "⚽" base emoji, 1-64 for "🎰" base emoji
         */
        public int $value,
    ) {
    }
}
