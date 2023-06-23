<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class InlineQueryResultsButton extends BaseType
{
    protected static array $map = [
        'text' => true,
        'web_app' => WebAppInfo::class,
        'start_parameter' => true,
    ];

    /**
     * Label text on the button
     */
    protected string $text;

    /**
     * Optional. Description of the Web App that will be launched when the user presses the button.
     * The Web App will be able to switch back to the inline mode using the method switchInlineQuery inside the Web App.
     */
    protected WebAppInfo|null $webApp = null;

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
    protected string|null $startParameter = null;

    public static function create(
        string $text,
        WebAppInfo|null $webApp,
        string|null $startParameter = null,
    ): self {
        $instance = new self();
        $instance->text = $text;
        $instance->webApp = $webApp;
        $instance->startParameter = $startParameter;

        return $instance;
    }
}
