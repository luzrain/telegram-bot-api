<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Payments\LabeledPrice;

/**
 * Use this method to create a link for an invoice.
 * Returns the created invoice link as String on success.
 *
 * @extends Method<string>
 */
final class CreateInvoiceLink extends Method
{
    protected static string $methodName = 'createInvoiceLink';

    public function __construct(
        /**
         * Product name, 1-32 characters
         */
        protected string $title,

        /**
         * Product description, 1-255 characters
         */
        protected string $description,

        /**
         * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
         */
        protected string $payload,

        /**
         * Three-letter ISO 4217 currency code, see more on currencies. Pass "XTR" for payments in Telegram Stars.
         *
         * @see https://core.telegram.org/bots/payments#supported-currencies
         */
        protected string $currency,

        /**
         * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.).
         * Must contain exactly one item for payments in Telegram Stars.
         *
         * @var list<LabeledPrice>
         */
        protected array $prices,

        /**
         * Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
         */
        protected string|null $providerToken = null,

        /**
         * The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double).
         * For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json,
         * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
         * Defaults to 0. Not supported for payments in Telegram Stars.
         *
         * @see https://core.telegram.org/bots/payments/currencies.json
         */
        protected int|null $maxTipAmount = null,

        /**
         * A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer, not float/double).
         * At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive,
         * passed in a strictly increased order and must not exceed max_tip_amount.
         *
         * @var list<int>|null
         */
        protected array|null $suggestedTipAmounts = null,

        /**
         * JSON-serialized data about the invoice, which will be shared with the payment provider.
         * A detailed description of required fields should be provided by the payment provider.
         */
        protected string|null $providerData = null,

        /**
         * URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
         */
        protected string|null $photoUrl = null,

        /**
         * Photo size in bytes
         */
        protected int|null $photoSize = null,

        /**
         * Photo width
         */
        protected int|null $photoWidth = null,

        /**
         * Photo height
         */
        protected int|null $photoHeight = null,

        /**
         * Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
         */
        protected bool|null $needName = null,

        /**
         * Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
         */
        protected bool|null $needPhoneNumber = null,

        /**
         * Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
         */
        protected bool|null $needEmail = null,

        /**
         * Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
         */
        protected bool|null $needShippingAddress = null,

        /**
         * Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
         */
        protected bool|null $sendPhoneNumberToProvider = null,

        /**
         * Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
         */
        protected bool|null $sendEmailToProvider = null,

        /**
         * Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
         */
        protected bool|null $isFlexible = null,
    ) {
    }
}
