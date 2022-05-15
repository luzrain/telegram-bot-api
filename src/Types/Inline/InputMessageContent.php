<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\BaseType;

/**
 * This object represents the content of a message to be sent as a result of an inline query.
 * Telegram clients currently support the following 5 types:
 *
 * @see InputTextMessageContent
 * @see InputLocationMessageContent
 * @see InputVenueMessageContent
 * @see InputContactMessageContent
 * @see InputInvoiceMessageContent
 */
class InputMessageContent extends BaseType
{
    protected function __construct()
    {
    }
}
