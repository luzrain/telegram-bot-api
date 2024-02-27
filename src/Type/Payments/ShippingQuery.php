<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\User;

/**
 * This object contains information about an incoming shipping query.
 */
final readonly class ShippingQuery extends Type
{
    protected function __construct(
        /**
         * Unique query identifier
         */
        public string $id,

        /**
         * User who sent the query
         */
        public User $from,

        /**
         * Bot specified invoice payload
         */
        public string $invoicePayload,

        /**
         * User specified shipping address
         */
        public ShippingAddress $shippingAddress,
    ) {
    }
}
