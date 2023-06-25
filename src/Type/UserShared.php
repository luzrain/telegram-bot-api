<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object contains information about the user whose identifier was shared with the bot using a KeyboardButtonRequestUser button.
 */
final class UserShared extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Identifier of the request
         */
        public int $requestId,

        /**
         * Identifier of the shared user.
         * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
         * But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
         * The bot may not have access to the user and could be unable to use this identifier,
         * unless the user is already known to the bot by some other means.
         */
        public int $userId,
    ) {
    }
}
