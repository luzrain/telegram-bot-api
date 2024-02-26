<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents one shipping option.
 */
final readonly class ShippingOption extends Type
{
    public function __construct(
        /**
         * Shipping option identifier
         */
        public string $id,

        /**
         * Option title
         */
        public string $title,

        /**
         * List of price portions
         *
         * @var list<LabeledPrice>
         */
        public array $prices,
    ) {
    }
}
