<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a page containing an embedded video player or a video file.
 * By default, this video file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
final class InlineQueryResultVideo extends InlineQueryResult
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
    protected string|null $caption = null;

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     */
    protected string|null $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected array|null $captionEntities = null;

    /**
     * Optional. Video width
     */
    protected int|null $videoWidth = null;

    /**
     * Optional. Video height
     */
    protected int|null $videoHeight = null;

    /**
     * Optional. Video duration in seconds
     */
    protected int|null $videoDuration = null;

    /**
     * Optional. Short description of the result
     */
    protected string|null $description = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the video.
     * This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     */
    protected InputMessageContent|null $inputMessageContent = null;

    public static function create(
        string $id,
        string $videoUrl,
        string $mimeType,
        string $thumbUrl,
        string $title,
        string|null $caption = null,
        string|null $parseMode = null,
        array|null $captionEntities = null,
        int|null $videoWidth = null,
        int|null $videoHeight = null,
        int|null $videoDuration = null,
        string|null $description = null,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
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

    public function getCaption(): string|null
    {
        return $this->caption;
    }

    public function getParseMode(): string|null
    {
        return $this->parseMode;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): array|null
    {
        return $this->captionEntities;
    }

    public function getVideoWidth(): int|null
    {
        return $this->videoWidth;
    }

    public function getVideoHeight(): int|null
    {
        return $this->videoHeight;
    }

    public function getVideoDuration(): int|null
    {
        return $this->videoDuration;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }
}
