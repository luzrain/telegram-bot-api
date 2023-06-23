<?php

declare(strict_types=1);

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
        'prices' => ArrayOfLabeledPrice::class,
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

    public static function create(
        string $id,
        string $title,
        array $prices,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->title = $title;
        $instance->prices = $prices;

        return $instance;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return LabeledPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }
}
