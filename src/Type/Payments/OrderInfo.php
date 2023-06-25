<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents information about an order.
 */
final class OrderInfo extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Optional. User name
         */
        public string|null $name = null,

        /**
         * Optional. User's phone number
         */
        public string|null $phoneNumber = null,

        /**
         * Optional. User email
         */
        public string|null $email = null,

        /**
         * Optional. User shipping address
         */
        public ShippingAddress|null $shippingAddress = null,
    ) {
    }
}
