<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an animated emoji that displays a random value.
 */
final class Dice extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Emoji on which the dice throw animation is based
         */
        public string $emoji,

        /**
         * Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
         */
        public int $value,
    ) {
    }
}
