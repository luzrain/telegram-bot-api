<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * This object represents the content of a media message to be sent. It should be one of
 *
 * @see InputMediaAnimation
 * @see InputMediaDocument
 * @see InputMediaAudio
 * @see InputMediaPhoto
 * @see InputMediaVideo
 */
class InputMedia extends BaseType
{
    protected function __construct()
    {
        parent::__construct();
    }
}
