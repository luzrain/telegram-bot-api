<?php

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\MessageEntity;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 */
class InlineQueryResultPhoto extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'photo_url' => true,
        'thumb_url' => true,
        'photo_width' => true,
        'photo_height' => true,
        'title' => true,
        'description' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be photo
     */
    protected string $type = 'photo';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
     */
    protected string $photoUrl;

    /**
     * URL of the thumbnail for the photo
     */
    protected string $thumbUrl;

    /**
     * Optional. Width of the photo
     */
    protected ?int $photoWidth = null;

    /**
     * Optional. Height of the photo
     */
    protected ?int $photoHeight = null;

    /**
     * Optional. Title for the result
     */
    protected ?string $title = null;

    /**
     * Optional. Short description of the result
     */
    protected ?string $description = null;

    /**
     * Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     */
    protected ?string $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected ?array $captionEntities = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected ?InlineKeyboardMarkup $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the photo
     */
    protected ?InputMessageContent $inputMessageContent = null;

    public static function create(
        string $id,
        string $photoUrl,
        string $thumbUrl,
        ?int $photoWidth = null,
        ?int $photoHeight = null,
        ?string $title = null,
        ?string $description = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->photoUrl = $photoUrl;
        $instance->thumbUrl = $thumbUrl;
        $instance->photoWidth = $photoWidth;
        $instance->photoHeight = $photoHeight;
        $instance->title = $title;
        $instance->description = $description;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;
        $instance->replyMarkup = $replyMarkup;
        $instance->inputMessageContent = $inputMessageContent;

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

    public function getPhotoUrl(): string
    {
        return $this->photoUrl;
    }

    public function getThumbUrl(): string
    {
        return $this->thumbUrl;
    }

    public function getPhotoWidth(): ?int
    {
        return $this->photoWidth;
    }

    public function getPhotoHeight(): ?int
    {
        return $this->photoHeight;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
