<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user.
 * Serves as a great replacement for the Telegram Login Widget when the user is coming from Telegram.
 */
final readonly class LoginUrl extends Type
{
    public function __construct(
        /**
         * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed.
         * If the user refuses to provide authorization data, the original URL without information about the user will be opened.
         * The data added is the same as described in Receiving authorization data.
         */
        public string $url,

        /**
         * Optional. New text of the button in forwarded messages.
         */
        public string|null $forwardText = null,

        /**
         * Optional. Username of a bot, which will be used for user authorization.
         * See Setting up a bot for more details. If not specified, the current bot's username will be assumed.
         * The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details.
         */
        public string|null $botUsername = null,

        /**
         * Optional. Pass True to request the permission for your bot to send messages to the user.
         */
        public bool|null $requestWriteAccess = null,
    ) {
    }
}
