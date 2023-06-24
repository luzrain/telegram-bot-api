<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a venue.
 */
final class Venue extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'location',
        'title',
        'address',
    ];

    protected static array $map = [
        'location' => Location::class,
        'title' => true,
        'address' => true,
        'foursquare_id' => true,
        'foursquare_type' => true,
        'google_place_id' => true,
        'google_place_type' => true,
    ];

    /**
     * Venue location. Can't be a live location
     */
    protected Location $location;

    /**
     * Name of the venue
     */
    protected string $title;

    /**
     * Address of the venue
     */
    protected string $address;

    /**
     * Optional. Foursquare identifier of the venue
     */
    protected string|null $foursquareId = null;

    /**
     * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     */
    protected string|null $foursquareType = null;

    /**
     * Optional. Google Places identifier of the venue
     */
    protected string|null $googlePlaceId = null;

    /**
     * Optional. Google Places type of the venue.
     * @see https://developers.google.com/places/web-service/supported_types
     */
    protected string|null $googlePlaceType = null;

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getFoursquareId(): string|null
    {
        return $this->foursquareId;
    }

    public function getFoursquareType(): string|null
    {
        return $this->foursquareType;
    }

    public function getGooglePlaceId(): string|null
    {
        return $this->googlePlaceId;
    }

    public function getGooglePlaceType(): string|null
    {
        return $this->googlePlaceType;
    }
}