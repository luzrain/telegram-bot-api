<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
final class InlineQueryResultGif extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'gif_url' => true,
        'thumbnail_url' => true,
        'gif_width' => true,
        'gif_height' => true,
        'gif_duration' => true,
        'thumbnail_mime_type' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be gif
     */
    protected string $type = 'gif';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid URL for the GIF file. File size must not exceed 1MB
     */
    protected string $gifUrl;

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     */
    protected string $thumbnailUrl;

    /**
     * Optional. Width of the GIF
     */
    protected int|null $gifWidth = null;

    /**
     * Optional. Height of the GIF
     */
    protected int|null $gifHeight = null;

    /**
     * Optional. Duration of the GIF in seconds
     */
    protected int|null $gifDuration = null;

    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     */
    protected string|null $thumbnailMimeType = null;

    /**
     * Optional. Title for the result
     */
    protected string|null $title = null;

    /**
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
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
     * Optional. Content of the message to be sent instead of the GIF animation
     */
    protected InputMessageContent|null $inputMessageContent = null;

    public static function create(
        string $id,
        string $gifUrl,
        string $thumbnailUrl,
        int|null $gifWidth = null,
        int|null $gifHeight = null,
        int|null $gifDuration = null,
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
        $instance->gifUrl = $gifUrl;
        $instance->thumbnailUrl = $thumbnailUrl;
        $instance->gifWidth = $gifWidth;
        $instance->gifHeight = $gifHeight;
        $instance->gifDuration = $gifDuration;
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

    public function getGifUrl(): string
    {
        return $this->gifUrl;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getGifWidth(): int|null
    {
        return $this->gifWidth;
    }

    public function getGifHeight(): int|null
    {
        return $this->gifHeight;
    }

    public function getGifDuration(): int|null
    {
        return $this->gifDuration;
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
