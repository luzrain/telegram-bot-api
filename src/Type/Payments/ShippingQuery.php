<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\User;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object contains information about an incoming shipping query.
 */
final readonly class ShippingQuery extends BaseType implements TypeInterface
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
