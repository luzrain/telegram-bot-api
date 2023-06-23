<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an animated emoji that displays a random value.
 */
final class Dice extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'emoji',
        'value',
    ];

    protected static array $map = [
        'emoji' => true,
        'value' => true,
    ];

    /**
     * Emoji on which the dice throw animation is based
     */
    protected string $emoji;

    /**
     * Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
     */
    protected int $value;

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
