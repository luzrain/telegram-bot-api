<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents an HTTP link to be sent.
 */
final readonly class InputMediaLink extends Type implements InputPollOptionMedia
{
    public const TYPE = 'link';

    /**
     * Type of the media, must be link
     */
    public string $type;

    public function __construct(
        /**
         * HTTP URL of the link
         */
        public string $url,
    ) {
        $this->type = self::TYPE;
    }
}
