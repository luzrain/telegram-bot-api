<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\MessageEntity;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound).
 * By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively,
 * you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'mpeg4_url' => true,
        'thumb_url' => true,
        'mpeg4_width' => true,
        'mpeg4_height' => true,
        'mpeg4_duration' => true,
        'thumb_mime_type' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be mpeg4_gif
     */
    protected string $type = 'mpeg4_gif';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB
     */
    protected string $mpeg4Url;

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     */
    protected string $thumbUrl;

    /**
     * Optional. Video width
     */
    protected ?int $mpeg4Width = null;

    /**
     * Optional. Video height
     */
    protected ?int $mpeg4Height = null;

    /**
     * Optional. Video duration in seconds
     */
    protected ?int $mpeg4Duration = null;

    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     */
    protected ?string $thumbMimeType = null;

    /**
     * Optional. Title for the result
     */
    protected ?string $title = null;

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the video animation
     */
    protected ?InputMessageContent $inputMessageContent = null;

    public static function create(
        string $id,
        string $mpeg4Url,
        string $thumbUrl,
        ?int $mpeg4Width = null,
        ?int $mpeg4Height = null,
        ?int $mpeg4Duration = null,
        ?string $thumbMimeType = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->mpeg4Url = $mpeg4Url;
        $instance->thumbUrl = $thumbUrl;
        $instance->mpeg4Width = $mpeg4Width;
        $instance->mpeg4Height = $mpeg4Height;
        $instance->mpeg4Duration = $mpeg4Duration;
        $instance->thumbMimeType = $thumbMimeType;
        $instance->title = $title;
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

    public function getMpeg4Url(): string
    {
        return $this->mpeg4Url;
    }

    public function getThumbUrl(): string
    {
        return $this->thumbUrl;
    }

    public function getMpeg4Width(): ?int
    {
        return $this->mpeg4Width;
    }

    public function getMpeg4Height(): ?int
    {
        return $this->mpeg4Height;
    }

    public function getMpeg4Duration(): ?int
    {
        return $this->mpeg4Duration;
    }

    public function getThumbMimeType(): ?string
    {
        return $this->thumbMimeType;
    }

    public function getTitle(): ?string
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

    /**
     * @return MessageEntity[]|null
     */
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
