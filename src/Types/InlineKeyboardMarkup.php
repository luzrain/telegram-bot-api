<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Arrays\ArrayOfInlineKeyboardButton;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
class InlineKeyboardMarkup extends BaseType implements TypeInterface
{
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
     * Create instance of InlineKeyboardMarkup
     */
    public static function create(array $arrayofArrayofKeyboardButton)
    {
        $instance = new self();
        $instance->inlineKeyboard = $arrayofArrayofKeyboardButton;

        return $instance;
    }

    public function getInlineKeyboard(): array
    {
        return $this->inlineKeyboard;
    }
}
