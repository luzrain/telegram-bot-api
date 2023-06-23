<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;

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
abstract class InputMessageContent extends BaseType
{
    protected function __construct()
    {
        parent::__construct();
    }
}
