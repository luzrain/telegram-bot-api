<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object defines the criteria used to request a suitable chat.
 * Information about the selected chat will be shared with the bot when the corresponding button is pressed.
 * The bot will be granted requested rights in the chat if appropriate.
 *
 * @link https://core.telegram.org/bots/features#chat-and-user-selection
 */
final readonly class KeyboardButtonRequestChat extends Type
{
    public function __construct(
        /**
         * Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
         */
        public int $requestId,

        /**
         * Pass True to request a channel chat, pass False to request a group or a supergroup chat.
         */
        public bool $chatIsChannel,

        /**
         * Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat.
         * If not specified, no additional restrictions are applied.
         */
        public bool|null $chatIsForum = null,

        /**
         * Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username.
         * If not specified, no additional restrictions are applied.
         */
        public bool|null $chatHasUsername = null,

        /**
         * Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
         */
        public bool|null $chatIsCreated = null,

        /**
         * Optional. A JSON-serialized object listing the required administrator rights of the user in the chat.
         * The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
         */
        public ChatAdministratorRights|null $userAdministratorRights = null,

        /**
         * Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat.
         * The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
         */
        public ChatAdministratorRights|null $botAdministratorRights = null,

        /**
         * Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
         */
        public bool|null $botIsMember = null,

        /**
         * Optional. Pass True to request the chat's title
         */
        public bool|null $requestTitle = null,

        /**
         * Optional. Pass True to request the chat's username
         */
        public bool|null $requestUsername = null,

        /**
         * Optional. Pass True to request the chat's photo
         */
        public bool|null $requestPhoto = null,
    ) {
    }
}
