<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents the content of a media message to be sent. It should be one of
 *
 * @see InputMediaAnimation
 * @see InputMediaDocument
 * @see InputMediaAudio
 * @see InputMediaPhoto
 * @see InputMediaVideo
 */
readonly class InputMedia extends Type
{
    protected function __construct(
        /**
         * Type of the result
         */
        public string $type,
    ) {
    }
}
