<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object defines the criteria used to request suitable users.
 * Information about the selected users will be shared with the bot when the corresponding button is pressed.
 *
 * @link https://core.telegram.org/bots/features#chat-and-user-selection
 */
final readonly class KeyboardButtonRequestUsers extends Type
{
    public function __construct(
        /**
         * Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message
         */
        public int $requestId,

        /**
         * Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
         */
        public bool|null $userIsBot = null,

        /**
         * Optional. Pass True to request premium users, pass False to request non-premium users.
         * If not specified, no additional restrictions are applied.
         */
        public bool|null $userIsPremium = null,

        /**
         * Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
         */
        public int|null $maxQuantity = null,

        /**
         * Optional. Pass True to request the users' first and last names
         */
        public bool|null $requestName = null,

        /**
         * Optional. Pass True to request the users' usernames
         */
        public bool|null $requestUsername = null,

        /**
         * Optional. Pass True to request the users' photos
         */
        public bool|null $requestPhoto = null,
    ) {
    }
}
