<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Payments\LabeledPrice;

/**
 * Represents the content of an invoice message to be sent as the result of an inline query.
 */
final readonly class InputInvoiceMessageContent extends Type implements InputMessageContent
{
    public function __construct(
        /**
         * Product name, 1-32 characters
         */
        public string $title,

        /**
         * Product description, 1-255 characters
         */
        public string $description,

        /**
         * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
         */
        public string $payload,

        /**
         * Payment provider token, obtained via Botfather
         */
        public string $providerToken,

        /**
         * Three-letter ISO 4217 currency code, see more on currencies
         *
         * @see https://core.telegram.org/bots/payments#supported-currencies
         */
        public string $currency,

        /**
         * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
         *
         * @var list<LabeledPrice>
         */
        #[ArrayType(LabeledPrice::class)]
        public array $prices,

        /**
         * Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double).
         * For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json,
         * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
         */
        public int|null $maxTipAmount = null,

        /**
         * Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency
         * (integer, not float/double).At most 4 suggested tip amounts can be specified. The suggested tip amounts must
         * be positive, passed in a strictly increased order and must not exceed max_tip_amount.
         *
         * @var list<int>|null
         */
        public array|null $suggestedTipAmounts = null,

        /**
         * Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider.
         * A detailed description of the required fields should be provided by the payment provider.
         */
        public string|null $providerData = null,

        /**
         * Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
         * People like it better when they see what they are paying for.
         */
        public string|null $photoUrl = null,

        /**
         * Optional. Photo size
         */
        public int|null $photoSize = null,

        /**
         * Optional. Photo width
         */
        public int|null $photoWidth = null,

        /**
         * Optional. Photo height
         */
        public int|null $photoHeight = null,

        /**
         * Optional. Pass True, if you require the user's full name to complete the order
         */
        public bool|null $needName = null,

        /**
         * Optional. Pass True, if you require the user's phone number to complete the order
         */
        public bool|null $needPhoneNumber = null,

        /**
         * Optional. Pass True, if you require the user's email address to complete the order
         */
        public bool|null $needEmail = null,

        /**
         * Optional. Pass True, if you require the user's shipping address to complete the order
         */
        public bool|null $needShippingAddress = null,

        /**
         * Optional. Pass True, if user's phone number should be sent to provider
         */
        public bool|null $sendPhoneNumberToProvider = null,

        /**
         * Optional. Pass True, if user's email address should be sent to provider
         */
        public bool|null $sendEmailToProvider = null,

        /**
         * Optional. Pass True, if the final price depends on the shipping method
         */
        public bool|null $isFlexible = null,
    ) {
    }
}
