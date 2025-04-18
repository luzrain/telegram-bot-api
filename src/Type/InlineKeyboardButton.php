<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Games\CallbackGame;

/**
 * This object represents one button of an inline keyboard. Exactly one of the optional fields must be used to specify type of the button.
 */
final readonly class InlineKeyboardButton extends Type
{
    public function __construct(
        /**
         * Label text on the button
         */
        public string $text,

        /**
         * Optional. HTTP or tg:// url to be opened when the button is pressed.
         * Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
         */
        public string|null $url = null,

        /**
         * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
         */
        public string|null $callbackData = null,

        /**
         * Optional. Description of the Web App that will be launched when the user presses the button.
         * The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
         * Available only in private chats between a user and the bot.
         */
        public WebAppInfo|null $webApp = null,

        /**
         * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
         */
        public LoginUrl|null $loginUrl = null,

        /**
         * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insertthe
         * bot's username and the specified inline query in the input field. Can be empty, in which case just the bot's username will be inserted.
         */
        public string|null $switchInlineQuery = null,

        /**
         * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current
         * chat's input field. Can be empty, in which case only the bot's username will be inserted.
         *
         * This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
         */
        public string|null $switchInlineQueryCurrentChat = null,

        /**
         * Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type,
         * open that chat and insert the bot's username and the specified inline query in the input field
         */
        public SwitchInlineQueryChosenChat|null $switchInlineQueryChosenChat = null,

        /**
         * Optional. Description of the button that copies the specified text to the clipboard.
         */
        public CopyTextButton| null $copyText = null,

        /**
         * Optional. Description of the game that will be launched when the user presses the button.
         *
         * NOTE: This type of button must always be the first button in the first row.
         */
        public CallbackGame|null $callbackGame = null,

        /**
         * Optional. Specify True, to send a Pay button.
         *
         * NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
         */
        public bool|null $pay = null,
    ) {
    }
}
