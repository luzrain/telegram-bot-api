<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 */
final readonly class PreparedInlineMessage extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the prepared message
         */
        public string $id,

        /**
         * Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
         */
        public int $expirationDate,
    ) {
    }
}
