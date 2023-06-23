<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 */
final class InputVenueMessageContent extends InputMessageContent
{
    protected static array $map = [
        'latitude' => true,
        'longitude' => true,
        'title' => true,
        'address' => true,
        'foursquare_id' => true,
        'foursquare_type' => true,
        'google_place_id' => true,
        'google_place_type' => true,
    ];

    /**
     * Latitude of the venue in degrees
     */
    protected float $latitude;

    /**
     * Longitude of the venue in degrees
     */
    protected float $longitude;

    /**
     * Name of the venue
     */
    protected string $title;

    /**
     * Address of the venue
     */
    protected string $address;

    /**
     * Optional. Foursquare identifier of the venue, if known
     */
    protected ?string $foursquareId = null;

    /**
     * Optional. Foursquare type of the venue, if known.
     * (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     */
    protected ?string $foursquareType = null;

    /**
     * Optional. Google Places identifier of the venue
     */
    protected ?string $googlePlaceId = null;

    /**
     * Optional. Google Places type of the venue. (See supported types.)
     *
     * @see https://developers.google.com/places/web-service/supported_types
     */
    protected ?string $googlePlaceType = null;

    public static function create(
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?string $foursquareId = null,
        ?string $foursquareType = null,
        ?string $googlePlaceId = null,
        ?string $googlePlaceType = null,
    ): self {
        $instance = new self();
        $instance->latitude = $latitude;
        $instance->longitude = $longitude;
        $instance->title = $title;
        $instance->address = $address;
        $instance->foursquareId = $foursquareId;
        $instance->foursquareType = $foursquareType;
        $instance->googlePlaceId = $googlePlaceId;
        $instance->googlePlaceType = $googlePlaceType;

        return $instance;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getFoursquareId(): ?string
    {
        return $this->foursquareId;
    }

    public function getFoursquareType(): ?string
    {
        return $this->foursquareType;
    }

    public function getGooglePlaceId(): ?string
    {
        return $this->googlePlaceId;
    }

    public function getGooglePlaceType(): ?string
    {
        return $this->googlePlaceType;
    }
}
