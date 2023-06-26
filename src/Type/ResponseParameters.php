<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * Describes why a request was unsuccessful.
 */
final readonly class ResponseParameters extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Optional. The group has been migrated to a supergroup with the specified identifier.
         * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
         * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public int|null $migrateToChatId = null,

        /**
         * Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
         */
        public int|null $retryAfter = null,
    ) {
    }
}
