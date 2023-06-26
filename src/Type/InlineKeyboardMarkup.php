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
final readonly class InlineKeyboardMarkup extends BaseType implements TypeInterface
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    #[PropertyType(ArrayOfArrayOfInlineKeyboardButton::class)]
    public array $inlineKeyboard;

    public function __construct(InlineKeyboardButtonArrayBuilder|array $inlineKeyboard)
    {
        $this->inlineKeyboard = is_array($inlineKeyboard) ? $inlineKeyboard : $inlineKeyboard->toArray();
    }
}
