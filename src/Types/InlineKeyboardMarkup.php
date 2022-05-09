<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
class InlineKeyboardMarkup extends BaseType implements TypeInterface
{
    private const BREAK = 1;

    protected static array $requiredParams = [
        'inline_keyboard',
    ];

    protected static array $map = [
        'inline_keyboard' => true,
    ];

    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    protected array $inlineKeyboard;

    /**
     * Create new instance of InlineKeyboardMarkup
     */
    public static function create(InlineKeyboardButton|int ...$arrayOfButtons): self
    {
        $rowIndex = 0;
        $markup = [$rowIndex => []];

        foreach ($arrayOfButtons as $button) {
            if ($button instanceof InlineKeyboardButton) {
                $markup[$rowIndex][] = $button->toArray();
            } elseif ($button === self::BREAK) {
                $rowIndex++;
            }
        }

        return new self([
            'inline_keyboard' => $markup,
        ]);
    }

    /**
     * Break buttons row to tne next row
     */
    public static function break(): int
    {
        return self::BREAK;
    }
}
