<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayOfArayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
final readonly class InlineKeyboardMarkup extends Type
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     *
     * @var list<list<InlineKeyboardButton>>
     */
    public array $inlineKeyboard;

    public function __construct(
        /**
         * Array of button rows, each represented by an Array of InlineKeyboardButton objects
         *
         * @var list<list<InlineKeyboardButton>>|InlineKeyboardButtonArrayBuilder
         */
        #[ArrayOfArayType(InlineKeyboardButton::class)]
        InlineKeyboardButtonArrayBuilder|array $inlineKeyboard,

        /**
         * Optional. Pass True if the reply interface must be shown to the user, as if they had manually selected the bot's message
         * and tapped 'Reply'. The value of the field can't be changed when the inline keyboard is edited.
         */
        public bool|null $forceReply = null,
    ) {
        /** @psalm-suppress PropertyTypeCoercion */
        $this->inlineKeyboard = \is_array($inlineKeyboard) ? $inlineKeyboard : $inlineKeyboard->toArray();
    }
}
