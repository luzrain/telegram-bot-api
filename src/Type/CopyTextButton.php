<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 */
final readonly class CopyTextButton extends Type
{
    public function __construct(
        /**
         * The text to be copied to the clipboard; 1-256 characters
         */
        public string $text,
    ) {
    }
}
