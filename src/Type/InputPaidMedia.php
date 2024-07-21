<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the paid media to be sent. Currently, it can be one of
 *
 * @see InputPaidMediaPhoto
 * @see InputPaidMediaVideo
 */
readonly class InputPaidMedia extends Type
{
    protected function __construct(
        /**
         * Type of the paid media
         */
        public string $type,
    ) {
    }
}
