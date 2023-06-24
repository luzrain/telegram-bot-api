<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\Games\CallbackGame;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 */
final class InlineKeyboardButton extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'text',
    ];

    protected static array $map = [
        'text' => true,
        'url' => true,
        'callback_data' => true,
        'web_app' => WebAppInfo::class,
        'login_url' => LoginUrl::class,
        'switch_inline_query' => true,
        'switch_inline_query_current_chat' => true,
        'switch_inline_query_chosen_chat' => SwitchInlineQueryChosenChat::class,
        'callback_game' => CallbackGame::class,
        'pay' => true,
    ];

    /**
     * Label text on the button
     */
    protected string $text;

    /**
     * Optional. HTTP or tg:// url to be opened when the button is pressed.
     * Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
     */
    protected string|null $url = null;

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     */
    protected string|null $callbackData = null;

    /**
     * Optional. Description of the Web App that will be launched when the user presses the button.
     * The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
     * Available only in private chats between a user and the bot.
     */
    protected WebAppInfo|null $webApp = null;

    /**
     * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
     */
    protected LoginUrl|null $loginUrl = null;

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insertthe
     * bot's username and the specified inline query in the input field. Can be empty, in which case just the bot's username will be inserted.
     */
    protected string|null $switchInlineQuery = null;

    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current
     * chat's input field. Can be empty, in which case only the bot's username will be inserted.
     *
     * This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
     */
    protected string|null $switchInlineQueryCurrentChat = null;

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type,
     * open that chat and insert the bot's username and the specified inline query in the input field
     */
    protected SwitchInlineQueryChosenChat|null $switchInlineQueryChosenChat = null;

    /**
     * Optional. Description of the game that will be launched when the user presses the button.
     *
     * NOTE: This type of button must always be the first button in the first row.
     */
    protected CallbackGame|null $callbackGame = null;

    /**
     * Optional. Specify True, to send a Pay button.
     *
     * NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
     */
    protected bool|null $pay = null;

    public static function create(
        string $text,
        string|null $url = null,
        string|null $callbackData = null,
        WebAppInfo|null $webApp = null,
        LoginUrl|null $loginUrl = null,
        string|null $switchInlineQuery = null,
        string|null $switchInlineQueryCurrentChat = null,
        SwitchInlineQueryChosenChat|null $switchInlineQueryChosenChat = null,
        CallbackGame|null $callbackGame = null,
        bool|null $pay = null,
    ) {
        $instance = new self();
        $instance->text = $text;
        $instance->url = $url;
        $instance->callbackData = $callbackData;
        $instance->webApp = $webApp;
        $instance->loginUrl = $loginUrl;
        $instance->switchInlineQuery = $switchInlineQuery;
        $instance->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
        $instance->switchInlineQueryChosenChat = $switchInlineQueryChosenChat;
        $instance->callbackGame = $callbackGame;
        $instance->pay = $pay;

        return $instance;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getUrl(): string|null
    {
        return $this->url;
    }

    public function getCallbackData(): string|null
    {
        return $this->callbackData;
    }

    public function getWebApp(): WebAppInfo|null
    {
        return $this->webApp;
    }

    public function getLoginUrl(): LoginUrl|null
    {
        return $this->loginUrl;
    }

    public function getSwitchInlineQuery(): string|null
    {
        return $this->switchInlineQuery;
    }

    public function getSwitchInlineQueryCurrentChat(): string|null
    {
        return $this->switchInlineQueryCurrentChat;
    }

    public function getSwitchInlineQueryChosenChat(): SwitchInlineQueryChosenChat|null
    {
        return $this->switchInlineQueryChosenChat;
    }

    public function getCallbackGame(): CallbackGame|null
    {
        return $this->callbackGame;
    }

    public function isPay(): bool|null
    {
        return $this->pay;
    }
}
