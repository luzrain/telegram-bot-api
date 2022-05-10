<?php

namespace TelegramBot\Api\Types\Payments;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Arrays\ArrayOfLabeledPrice;

/**
 * This object represents one shipping option.
 */
class ShippingOption extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'id',
        'title',
        'prices',
    ];

    protected static array $map = [
        'id' => true,
        'title' => true,
        'prices' => ArrayOfLabeledPrice::class
    ];

    /**
     * Shipping option identifier
     */
    protected string $id;

    /**
     * Option title
     */
    protected string $title;

    /**
     * List of price portions
     *
     * @var LabeledPrice[]
     */
    protected array $prices;

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }
}
