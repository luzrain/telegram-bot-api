<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a location on a map. By default, the location will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
final class InlineQueryResultLocation extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'latitude' => true,
        'longitude' => true,
        'title' => true,
        'horizontal_accuracy' => true,
        'live_period' => true,
        'heading' => true,
        'proximity_alert_radius' => true,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
        'thumbnail_url' => true,
        'thumbnail_width' => true,
        'thumbnail_height' => true,
    ];

    /**
     * Type of the result, must be location
     */
    protected string $type = 'location';

    /**
     * Unique identifier for this result, 1-64 Bytes
     */
    protected string $id;

    /**
     * Location latitude in degrees
     */
    protected float $latitude;

    /**
     * Location longitude in degrees
     */
    protected float $longitude;

    /**
     * Location title
     */
    protected string $title;

    /**
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     */
    protected float|null $horizontalAccuracy = null;

    /**
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     */
    protected int|null $livePeriod = null;

    /**
     * Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     */
    protected int|null $heading = null;

    /**
     * Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters.
     * Must be between 1 and 100000 if specified.
     */
    protected int|null $proximityAlertRadius = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the location
     */
    protected InputMessageContent|null $inputMessageContent = null;

    /**
     * Optional. Url of the thumbnail for the result
     */
    protected string|null $thumbnailUrl = null;

    /**
     * Optional. Thumbnail width
     */
    protected int|null $thumbnailWidth = null;

    /**
     * Optional. Thumbnail height
     */
    protected int|null $thumbnailHeight = null;

    public static function create(
        string $id,
        float $latitude,
        float $longitude,
        string $title,
        float|null $horizontalAccuracy = null,
        int|null $livePeriod = null,
        int|null $heading = null,
        int|null $proximityAlertRadius = null,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
        string|null $thumbnailUrl = null,
        int|null $thumbnailWidth = null,
        int|null $thumbnailHeight = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->latitude = $latitude;
        $instance->longitude = $longitude;
        $instance->title = $title;
        $instance->horizontalAccuracy = $horizontalAccuracy;
        $instance->livePeriod = $livePeriod;
        $instance->heading = $heading;
        $instance->proximityAlertRadius = $proximityAlertRadius;
        $instance->replyMarkup = $replyMarkup;
        $instance->inputMessageContent = $inputMessageContent;
        $instance->thumbnailUrl = $thumbnailUrl;
        $instance->thumbnailWidth = $thumbnailWidth;
        $instance->thumbnailHeight = $thumbnailHeight;

        return $instance;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getId(): string
    {
        return $this->id;
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

    public function getHorizontalAccuracy(): float|null
    {
        return $this->horizontalAccuracy;
    }

    public function getLivePeriod(): int|null
    {
        return $this->livePeriod;
    }

    public function getHeading(): int|null
    {
        return $this->heading;
    }

    public function getProximityAlertRadius(): int|null
    {
        return $this->proximityAlertRadius;
    }

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    public function getThumbnailUrl(): string|null
    {
        return $this->thumbnailUrl;
    }

    public function getThumbnailWidth(): int|null
    {
        return $this->thumbnailWidth;
    }

    public function getThumbnailHeight(): int|null
    {
        return $this->thumbnailHeight;
    }
}
