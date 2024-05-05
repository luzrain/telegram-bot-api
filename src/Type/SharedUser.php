<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
 */
final readonly class SharedUser extends Type
{
    protected function __construct(
        /**
         * Identifier of the shared user. This number may have more than 32 significant bits and some programming
         * languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits,
         * so 64-bit integers or double-precision float types are safe for storing these identifiers.
         * The bot may not have access to the user and could be unable to use this identifier,
         * unless the user is already known to the bot by some other means.
         */
        public int $userId,

        /**
         * Optional. First name of the user, if the name was requested by the bot
         */
        public string|null $firstName = null,

        /**
         * Optional. Last name of the user, if the name was requested by the bot
         */
        public string|null $lastName = null,

        /**
         * Optional. Username of the user, if the username was requested by the bot
         */
        public string|null $username = null,

        /**
         * Optional. Available sizes of the chat photo, if the photo was requested by the bot
         *
         * @var list<PhotoSize>|null
         */
        #[ArrayType(PhotoSize::class)]
        public array|null $photo = null,
    ) {
    }
}
