<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents one button of the reply keyboard.
 * For simple text buttons String can be used instead of this object to specify text of the button.
 * Optional fields web_app, request_contact, request_location, and request_poll are mutually exclusive.
 */
class KeyboardButton extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'text',
    ];

    protected static array $map = [
        'text' => true,
        'request_contact' => true,
        'request_location' => true,
        'request_poll' => KeyboardButtonPollType::class,
        'web_app' => WebAppInfo::class,
    ];

    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     */
    protected string $text;

    /**
     * Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
     */
    protected ?bool $requestContact = null;

    /**
     * Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
     */
    protected ?bool $requestLocation = null;

    /**
     * Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
     */
    protected ?KeyboardButtonPollType $requestPoll = null;

    /**
     * Optional. If specified, the described Web App will be launched when the button is pressed.
     * The Web App will be able to send a “web_app_data” service message. Available in private chats only.
     */
    protected ?WebAppInfo $webApp = null;

    /**
     * Create new instance of KeyboardButton
     */
    public static function create(
        string $text,
        ?bool $requestContact = null,
        ?bool $requestLocation = null,
        ?KeyboardButtonPollType $requestPoll = null,
        ?WebAppInfo $webApp = null,
    ) {
        $instance = new self();
        $instance->text = $text;
        $instance->requestContact = $requestContact;
        $instance->requestLocation = $requestLocation;
        $instance->requestPoll = $requestPoll;
        $instance->webApp = $webApp;

        return $instance;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function isRequestContact(): ?bool
    {
        return $this->requestContact;
    }

    public function isRequestLocation(): ?bool
    {
        return $this->requestLocation;
    }

    public function getRequestPoll(): ?KeyboardButtonPollType
    {
        return $this->requestPoll;
    }

    public function getWebApp(): ?WebAppInfo
    {
        return $this->webApp;
    }
}
