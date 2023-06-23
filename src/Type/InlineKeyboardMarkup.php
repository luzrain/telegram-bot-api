<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfArrayOfInlineKeyboardButton;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
final class InlineKeyboardMarkup extends BaseType implements TypeInterface
{
    private const BREAK = 2;

    protected static array $requiredParams = [
        'inline_keyboard',
    ];

    protected static array $map = [
        'inline_keyboard' => ArrayOfArrayOfInlineKeyboardButton::class,
    ];

    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    protected array $inlineKeyboard;

    /**
     * Create new instance of InlineKeyboardMarkup
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Add buttons into markup
     */
    public function addButtons(InlineKeyboardButton|int ...$arrayOfButtons): self
    {
        $rowIndex = 0;
        $this->inlineKeyboard = [$rowIndex => []];

        foreach ($arrayOfButtons as $button) {
            if ($button instanceof InlineKeyboardButton) {
                $this->inlineKeyboard[$rowIndex][] = $button->toArray();
            } elseif ($button === self::BREAK) {
                $rowIndex++;
            }
        }

        return $this;
    }

    /**
     * Break buttons row to tne next row
     */
    public static function break(): int
    {
        return self::BREAK;
    }
}
