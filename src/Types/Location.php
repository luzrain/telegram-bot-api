<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a point on the map.
 */
class Location extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'longitude',
        'latitude',
    ];

    protected static array $map = [
        'longitude' => true,
        'latitude' => true,
        'horizontal_accuracy' => true,
        'live_period' => true,
        'heading' => true,
        'proximity_alert_radius' => true,
    ];

    /**
     * Longitude as defined by sender
     */
    protected float $longitude;

    /**
     * Latitude as defined by sender
     */
    protected float $latitude;

    /**
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     */
    protected ?float $horizontalAccuracy = null;

    /**
     * Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
     */
    protected ?int $livePeriod = null;

    /**
     * Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     */
    protected ?int $heading = null;

    /**
     * Optional. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     */
    protected ?int $proximityAlertRadius = null;

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getHorizontalAccuracy(): ?float
    {
        return $this->horizontalAccuracy;
    }

    public function getLivePeriod(): ?int
    {
        return $this->livePeriod;
    }

    public function getHeading(): ?int
    {
        return $this->heading;
    }

    public function getProximityAlertRadius(): ?int
    {
        return $this->proximityAlertRadius;
    }
}
