<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;

/**
 * This object defines the criteria used to request a suitable user.
 * The identifier of the selected user will be shared with the bot when the corresponding button is pressed.
 * More about requesting users »
 * @see https://core.telegram.org/bots/features#chat-and-user-selection
 */
final class KeyboardButtonRequestUser extends BaseType
{
    public function __construct(
        /**
         * Signed 32-bit identifier of the request, which will be received back in the UserShared object. Must be unique within the message
         */
        public int $requestId,

        /**
         * Optional. Pass True to request a bot, pass False to request a regular user. If not specified, no additional restrictions are applied.
         */
        public bool|null $userIsBot = null,

        /**
         * Optional. Pass True to request a premium user, pass False to request a non-premium user.
         * If not specified, no additional restrictions are applied.
         */
        public bool|null $userIsPremium = null,
    ) {
    }
}
