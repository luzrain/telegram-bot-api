<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
final readonly class InlineKeyboardMarkup extends Type implements TypeDenormalizable
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    public array $inlineKeyboard;

    public function __construct(
        #[ArrayType(InlineKeyboardButton::class, arrayOfArray: true)]
        InlineKeyboardButtonArrayBuilder|array $inlineKeyboard,
    ) {
        $this->inlineKeyboard = \is_array($inlineKeyboard) ? $inlineKeyboard : $inlineKeyboard->toArray();
    }
}
