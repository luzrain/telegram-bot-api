<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound).
 * By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively,
 * you can use input_message_content to send a message with the specified content instead of the animation.
 */
final class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'mpeg4_url' => true,
        'thumbnail_url' => true,
        'mpeg4_width' => true,
        'mpeg4_height' => true,
        'mpeg4_duration' => true,
        'thumbnail_mime_type' => true,
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
    protected string $thumbnailUrl;

    /**
     * Optional. Video width
     */
    protected int|null $mpeg4Width = null;

    /**
     * Optional. Video height
     */
    protected int|null $mpeg4Height = null;

    /**
     * Optional. Video duration in seconds
     */
    protected int|null $mpeg4Duration = null;

    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     */
    protected string|null $thumbnailMimeType = null;

    /**
     * Optional. Title for the result
     */
    protected string|null $title = null;

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     */
    protected string|null $caption = null;

    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
     */
    protected string|null $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected array|null $captionEntities = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the video animation
     */
    protected InputMessageContent|null $inputMessageContent = null;

    public static function create(
        string $id,
        string $mpeg4Url,
        string $thumbnailUrl,
        int|null $mpeg4Width = null,
        int|null $mpeg4Height = null,
        int|null $mpeg4Duration = null,
        string|null $thumbnailMimeType = null,
        string|null $title = null,
        string|null $caption = null,
        string|null $parseMode = null,
        array|null $captionEntities = null,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->mpeg4Url = $mpeg4Url;
        $instance->thumbnailUrl = $thumbnailUrl;
        $instance->mpeg4Width = $mpeg4Width;
        $instance->mpeg4Height = $mpeg4Height;
        $instance->mpeg4Duration = $mpeg4Duration;
        $instance->thumbnailMimeType = $thumbnailMimeType;
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

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getMpeg4Width(): int|null
    {
        return $this->mpeg4Width;
    }

    public function getMpeg4Height(): int|null
    {
        return $this->mpeg4Height;
    }

    public function getMpeg4Duration(): int|null
    {
        return $this->mpeg4Duration;
    }

    public function getThumbnailMimeType(): string|null
    {
        return $this->thumbnailMimeType;
    }

    public function getTitle(): string|null
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

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }
}
