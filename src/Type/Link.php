<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents an HTTP link.
 */
final readonly class Link extends Type
{
    protected function __construct(
        /**
         * URL of the link
         */
        public string $url,
    ) {
    }
}
