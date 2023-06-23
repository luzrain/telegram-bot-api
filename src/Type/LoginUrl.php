<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user.
 * Serves as a great replacement for the Telegram Login Widget when the user is coming from Telegram.
 */
final class LoginUrl extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'url',
    ];

    protected static array $map = [
        'url' => true,
        'forward_text' => true,
        'bot_username' => true,
        'request_write_access' => true,
    ];

    /**
     * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed.
     * If the user refuses to provide authorization data, the original URL without information about the user will be opened.
     * The data added is the same as described in Receiving authorization data.
     */
    protected string $url;

    /**
     * Optional. New text of the button in forwarded messages.
     */
    protected ?string $forwardText = null;

    /**
     * Optional. Username of a bot, which will be used for user authorization.
     * See Setting up a bot for more details. If not specified, the current bot's username will be assumed.
     * The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details.
     */
    protected ?string $botUsername = null;

    /**
     * Optional. Pass True to request the permission for your bot to send messages to the user.
     */
    protected ?bool $requestWriteAccess = null;

    public static function create(
        string $url = null,
        ?string $forwardText = null,
        ?string $botUsername = null,
        ?bool $requestWriteAccess = null,
    ) {
        $instance = new self();
        $instance->url = $url;
        $instance->forwardText = $forwardText;
        $instance->botUsername = $botUsername;
        $instance->requestWriteAccess = $requestWriteAccess;

        return $instance;
    }
}
