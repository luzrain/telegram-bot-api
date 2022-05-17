<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\Arrays\ArrayOfLabeledPrice;
use TelegramBot\Api\Types\Payments\LabeledPrice;

/**
 * Represents the content of an invoice message to be sent as the result of an inline query.
 */
class InputInvoiceMessageContent extends InputMessageContent
{
    protected static array $map = [
        'title' => true,
        'description' => true,
        'payload' => true,
        'provider_token' => true,
        'currency' => true,
        'prices' => ArrayOfLabeledPrice::class,
        'max_tip_amount' => true,
        'suggested_tip_amounts' => true,
        'provider_data' => true,
        'photo_url' => true,
        'photo_size' => true,
        'photo_width' => true,
        'photo_height' => true,
        'need_name' => true,
        'need_phone_number' => true,
        'need_email' => true,
        'need_shipping_address' => true,
        'send_phone_number_to_provider' => true,
        'send_email_to_provider' => true,
        'is_flexible' => true,
    ];

    /**
     * Product name, 1-32 characters
     */
    protected string $title;

    /**
     * Product description, 1-255 characters
     */
    protected string $description;

    /**
     * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     */
    protected string $payload;

    /**
     * Payment provider token, obtained via Botfather
     */
    protected string $providerToken;

    /**
     * Three-letter ISO 4217 currency code, see more on currencies
     *
     * @see https://core.telegram.org/bots/payments#supported-currencies
     */
    protected string $currency;

    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     *
     * @var LabeledPrice[]
     */
    protected array $prices;

    /**
     * Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double).
     * For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json,
     * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     */
    protected ?int $maxTipAmount = null;

    /**
     * Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency
     * (integer, not float/double).At most 4 suggested tip amounts can be specified. The suggested tip amounts must
     * be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     *
     * @var int[]
     */
    protected ?array $suggestedTipAmounts = null;

    /**
     * Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider.
     * A detailed description of the required fields should be provided by the payment provider.
     */
    protected ?string $providerData = null;

    /**
     * Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * People like it better when they see what they are paying for.
     */
    protected ?string $photoUrl = null;

    /**
     * Optional. Photo size
     */
    protected ?int $photoSize = null;

    /**
     * Optional. Photo width
     */
    protected ?int $photoWidth = null;

    /**
     * Optional. Photo height
     */
    protected ?int $photoHeight = null;

    /**
     * Optional. Pass True, if you require the user's full name to complete the order
     */
    protected ?bool $needName = null;

    /**
     * Optional. Pass True, if you require the user's phone number to complete the order
     */
    protected ?bool $needPhoneNumber = null;

    /**
     * Optional. Pass True, if you require the user's email address to complete the order
     */
    protected ?bool $needEmail = null;

    /**
     * Optional. Pass True, if you require the user's shipping address to complete the order
     */
    protected ?bool $needShippingAddress = null;

    /**
     * Optional. Pass True, if user's phone number should be sent to provider
     */
    protected ?bool $sendPhoneNumberToProvider = null;

    /**
     * Optional. Pass True, if user's email address should be sent to provider
     */
    protected ?bool $sendEmailToProvider = null;

    /**
     * Optional. Pass True, if the final price depends on the shipping method
     */
    protected ?bool $isFlexible = null;

    public static function create(
        string $title,
        string $description,
        string $payload,
        string $providerToken,
        string $currency,
        array $prices,
        ?int $maxTipAmount = null,
        ?array $suggestedTipAmounts = null,
        ?string $providerData = null,
        ?string $photoUrl = null,
        ?int $photoSize = null,
        ?int $photoWidth = null,
        ?int $photoHeight = null,
        ?bool $needName = null,
        ?bool $needPhoneNumber = null,
        ?bool $needEmail = null,
        ?bool $needShippingAddress = null,
        ?bool $sendPhoneNumberToProvider = null,
        ?bool $sendEmailToProvider = null,
        ?bool $isFlexible = null,
    ): self {
        $instance = new self();
        $instance->title = $title;
        $instance->description = $description;
        $instance->payload = $payload;
        $instance->providerToken = $providerToken;
        $instance->currency = $currency;
        $instance->prices = $prices;
        $instance->maxTipAmount = $maxTipAmount;
        $instance->suggestedTipAmounts = $suggestedTipAmounts;
        $instance->providerData = $providerData;
        $instance->photoUrl = $photoUrl;
        $instance->photoSize = $photoSize;
        $instance->photoWidth = $photoWidth;
        $instance->photoHeight = $photoHeight;
        $instance->needName = $needName;
        $instance->needPhoneNumber = $needPhoneNumber;
        $instance->needEmail = $needEmail;
        $instance->needShippingAddress = $needShippingAddress;
        $instance->sendPhoneNumberToProvider = $sendPhoneNumberToProvider;
        $instance->sendEmailToProvider = $sendEmailToProvider;
        $instance->isFlexible = $isFlexible;

        return $instance;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function getProviderToken(): string
    {
        return $this->providerToken;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return LabeledPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    public function getMaxTipAmount(): ?int
    {
        return $this->maxTipAmount;
    }

    /**
     * @return int[]|null
     */
    public function getSuggestedTipAmounts(): ?array
    {
        return $this->suggestedTipAmounts;
    }

    public function getProviderData(): ?string
    {
        return $this->providerData;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    public function getPhotoSize(): ?int
    {
        return $this->photoSize;
    }

    public function getPhotoWidth(): ?int
    {
        return $this->photoWidth;
    }

    public function getPhotoHeight(): ?int
    {
        return $this->photoHeight;
    }

    public function isNeedName(): ?bool
    {
        return $this->needName;
    }

    public function isNeedPhoneNumber(): ?bool
    {
        return $this->needPhoneNumber;
    }

    public function isNeedEmail(): ?bool
    {
        return $this->needEmail;
    }

    public function isNeedShippingAddress(): ?bool
    {
        return $this->needShippingAddress;
    }

    public function isSendPhoneNumberToProvider(): ?bool
    {
        return $this->sendPhoneNumberToProvider;
    }

    public function isSendEmailToProvider(): ?bool
    {
        return $this->sendEmailToProvider;
    }

    public function isFlexible(): ?bool
    {
        return $this->isFlexible;
    }
}
