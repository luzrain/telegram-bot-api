<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;
use TelegramBot\Api\Types\InlineKeyboardMarkup;

/**
 * Represents a link to a page containing an embedded video player or a video file.
 * By default, this video file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
class InlineQueryResultVideo extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'video_url' => true,
        'mime_type' => true,
        'thumb_url' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'video_width' => true,
        'video_height' => true,
        'video_duration' => true,
        'description' => true,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be video
     */
    protected string $type = 'video';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid URL for the embedded video player or video file
     */
    protected string $videoUrl;

    /**
     * Mime type of the content of video url, “text/html” or “video/mp4”
     */
    protected string $mimeType;

    /**
     * URL of the thumbnail (JPEG only) for the video
     */
    protected string $thumbUrl;

    /**
     * Title for the result
     */
    protected string $title;

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     */
    protected ?string $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     */
    protected ?array $captionEntities = null;

    /**
     * Optional. Video width
     */
    protected ?int $videoWidth = null;

    /**
     * Optional. Video height
     */
    protected ?int $videoHeight = null;

    /**
     * Optional. Video duration in seconds
     */
    protected ?int $videoDuration = null;

    /**
     * Optional. Short description of the result
     */
    protected ?string $description = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected ?InlineKeyboardMarkup $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the video.
     * This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     */
    protected ?InputMessageContent $inputMessageContent = null;

    public static function create(
        string $id,
        string $videoUrl,
        string $mimeType,
        string $thumbUrl,
        string $title,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?int $videoWidth = null,
        ?int $videoHeight = null,
        ?int $videoDuration = null,
        ?string $description = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->videoUrl = $videoUrl;
        $instance->mimeType = $mimeType;
        $instance->thumbUrl = $thumbUrl;
        $instance->title = $title;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;
        $instance->videoWidth = $videoWidth;
        $instance->videoHeight = $videoHeight;
        $instance->videoDuration = $videoDuration;
        $instance->description = $description;
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

    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    public function geMimeType(): string
    {
        return $this->mimeType;
    }

    public function getThumbUrl(): string
    {
        return $this->thumbUrl;
    }

    public function getTitle(): string
    {
        return $this->title;
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

    public function getVideoWidth(): ?int
    {
        return $this->videoWidth;
    }

    public function getVideoHeight(): ?int
    {
        return $this->videoHeight;
    }

    public function getVideoDuration(): ?int
    {
        return $this->videoDuration;
    }

    public function getDescription(): ?string
    {
        return $this->description;
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
