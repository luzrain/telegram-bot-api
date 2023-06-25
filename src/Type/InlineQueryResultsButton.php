<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;

final class InlineQueryResultsButton extends BaseType
{
    public function __construct(
        /**
         * Label text on the button
         */
        public string $text,

        /**
         * Optional. Description of the Web App that will be launched when the user presses the button.
         * The Web App will be able to switch back to the inline mode using the method switchInlineQuery inside the Web App.
         */
        public WebAppInfo|null $webApp = null,

        /**
         * Optional. Deep-linking parameter for the /start message sent to the bot when a user presses the button.
         * 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.
         *
         * Example:
         * An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly.
         * To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button,
         * switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link.
         * Once done, the bot can offer a switch_inline button so that the user can easily return to the chat where they
         * wanted to use the bot's inline capabilities.
         */
        public string|null $startParameter = null,
    ) {
    }
}
