<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a keyboard button to be used by a user of a Mini App.
 */
final readonly class PreparedKeyboardButton extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the keyboard button
         */
        public string $id,
    ) {
    }
}
