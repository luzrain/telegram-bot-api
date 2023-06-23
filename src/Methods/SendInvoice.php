<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Types\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Types\Message;
use Luzrain\TelegramBotApi\Types\Payments\LabeledPrice;

/**
 * Use this method to send invoices. On success, the sent Message is returned.
 */
final class SendInvoice extends BaseMethod
{
    protected static string $methodName = 'sendInvoice';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

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
         * Payments provider token, obtained via Botfather
         */
        protected string $providerToken,

        /**
         * Three-letter ISO 4217 currency code, see more on currencies
         *
         * @see https://core.telegram.org/bots/payments#supported-currencies
         */
        protected string $currency,

        /**
         * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
         *
         * @var LabeledPrice[]
         */
        protected array $prices,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double).
         * For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json,
         * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
         * Defaults to 0
         */
        protected int|null $maxTipAmount = null,

        /**
         * A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer, not float/double).
         * At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive,
         * passed in a strictly increased order and must not exceed max_tip_amount.
         *
         * @var int[]
         */
        protected array|null $suggestedTipAmounts = null,

        /**
         * Unique deep-linking parameter. If left empty, forwarded copies of the sent message will have a Pay button,
         * allowing multiple users to pay directly from the forwarded message, using the same invoice.
         * If non-empty, forwarded copies of the sent message will have a URL button with a deep link to the bot
         * (instead of a Pay button),with the value used as the start parameter
         */
        protected string|null $startParameter = null,

        /**
         * A JSON-serialized data about the invoice, which will be shared with the payment provider.
         * A detailed description of required fields should be provided by the payment provider.
         */
        protected string|null $providerData = null,

        /**
         * URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
         * People like it better when they see what they are paying for.
         */
        protected string|null $photoUrl = null,

        /**
         * Photo size
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
         * Pass True, if you require the user's full name to complete the order
         */
        protected bool|null $needName = null,

        /**
         * Pass True, if you require the user's phone number to complete the order
         */
        protected bool|null $needPhoneNumber = null,

        /**
         * Pass True, if you require the user's email address to complete the order
         */
        protected bool|null $needEmail = null,

        /**
         * Pass True, if you require the user's shipping address to complete the order
         */
        protected bool|null $needShippingAddress = null,

        /**
         * Pass True, if user's phone number should be sent to provider
         */
        protected bool|null $sendPhoneNumberToProvider = null,

        /**
         * Pass True, if user's email address should be sent to provider
         */
        protected bool|null $sendEmailToProvider = null,

        /**
         * Pass True, if the final price depends on the shipping method
         */
        protected bool|null $isFlexible = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * If the message is a reply, ID of the original message
         */
        protected int|null $replyToMessageId = null,

        /**
         * Pass True, if the message should be sent even if the specified replied-to message is not found
         */
        protected bool|null $allowSendingWithoutReply = null,

        /**
         * A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown.
         * If not empty, the first button must be a Pay button.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
