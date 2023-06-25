<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfArrayOfInlineKeyboardButton;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
final class InlineKeyboardMarkup extends BaseType implements TypeInterface
{
    private const BREAK = 'break';

    protected function __construct(
        /**
         * Array of button rows, each represented by an Array of InlineKeyboardButton objects
         */
        #[PropertyType(ArrayOfArrayOfInlineKeyboardButton::class)]
        public array $inlineKeyboard,
    ) {
    }

    /**
     * Create new instance of InlineKeyboardMarkup
     */
    public static function create(): self
    {
        return new self(inlineKeyboard: [[]]);
    }

    /**
     * Add buttons into markup
     */
    public function addButtons(InlineKeyboardButton|string ...$arrayOfButtons): self
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
    public static function break(): string
    {
        return self::BREAK;
    }
}
