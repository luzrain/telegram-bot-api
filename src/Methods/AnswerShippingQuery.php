<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\Payments\ShippingOption;

/**
 * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified,
 * the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries.
 * On success, True is returned.
 */
final class AnswerShippingQuery extends BaseMethod
{
    protected static string $methodName = 'answerShippingQuery';

    public function __construct(

        /**
         * Unique identifier for the query to be answered
         */
        protected string $shippingQueryId,

        /**
         * Specify True if delivery to the specified address is possible and False if there are any problems
         * (for example, if delivery to the specified address is not possible)
         */
        protected bool $ok,

        /**
         * Required if ok is True. A JSON-serialized array of available shipping options.
         *
         * @var ShippingOption[]
         */
        protected array|null $shippingOptions = null,

        /**
         * Required if ok is False. Error message in human readable form that explains why it is impossible to complete the order
         * (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
         */
        protected string|null $errorMessage = null,
    ) {
    }
}
