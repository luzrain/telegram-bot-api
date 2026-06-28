<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents an HTTP link to be sent.
 */
final readonly class InputMediaLink extends Type implements InputPollOptionMedia
{
    public string $type;

    public function __construct(
        /**
         * HTTP URL of the link
         */
        public string $url,
    ) {
        $this->type = 'link';
    }
}
