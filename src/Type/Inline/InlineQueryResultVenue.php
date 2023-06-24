<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a venue. By default, the venue will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 */
final class InlineQueryResultVenue extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'latitude' => true,
        'longitude' => true,
        'title' => true,
        'address' => true,
        'foursquare_id' => true,
        'foursquare_type' => true,
        'google_place_id' => true,
        'google_place_type' => true,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
        'thumbnail_url' => true,
        'thumbnail_width' => true,
        'thumbnail_height' => true,
    ];

    /**
     * Type of the result, must be venue
     */
    protected string $type = 'venue';

    /**
     * Unique identifier for this result, 1-64 Bytes
     */
    protected string $id;

    /**
     * Latitude of the venue location in degrees
     */
    protected float $latitude;

    /**
     * Longitude of the venue location in degrees
     */
    protected float $longitude;

    /**
     * Title of the venue
     */
    protected string $title;

    /**
     * Address of the venue
     */
    protected string $address;

    /**
     * Optional. Foursquare identifier of the venue if known
     */
    protected string|null $foursquareId = null;

    /**
     * Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     */
    protected string|null $foursquareType = null;

    /**
     * Optional. Google Places identifier of the venue
     */
    protected string|null $googlePlaceId = null;

    /**
     * Optional. Google Places type of the venue. (See supported types.)
     *
     * @see https://developers.google.com/places/web-service/supported_types
     */
    protected string|null $googlePlaceType = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the venue
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
        string $address,
        string|null $foursquareId = null,
        string|null $foursquareType = null,
        string|null $googlePlaceId = null,
        string|null $googlePlaceType = null,
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
        $instance->address = $address;
        $instance->foursquareId = $foursquareId;
        $instance->foursquareType = $foursquareType;
        $instance->googlePlaceId = $googlePlaceId;
        $instance->googlePlaceType = $googlePlaceType;
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