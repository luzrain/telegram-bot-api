<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;

/**
 * Represents a video to be sent.
 */
final class InputMediaVideo extends InputMedia
{
    protected static array $map = [
        'type' => true,
        'media' => true,
        'thumbnail' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'width' => true,
        'height' => true,
        'duration' => true,
        'supports_streaming' => true,
        'has_spoiler' => true,
    ];

    /**
     * Type of the result, must be video
     */
    protected string $type = 'video';

    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload
     * a new one using multipart/form-data under <file_attach_name> name.
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    protected InputFile|string $media;

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
     * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320.
     * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file,
     * so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>.
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    protected InputFile|string|null $thumbnail = null;

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     *
     * @see https://core.telegram.org/bots/api#formatting-options
     */
    protected ?string $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected ?array $captionEntities = null;

    /**
     * Optional. Video width
     */
    protected ?int $width = null;

    /**
     * Optional. Video height
     */
    protected ?int $height = null;

    /**
     * Optional. Video duration in seconds
     */
    protected ?int $duration = null;

    /**
     * Optional. Pass True, if the uploaded video is suitable for streaming
     */
    protected ?bool $supportsStreaming = null;

    /**
     * Optional. Pass True if the animation needs to be covered with a spoiler animation
     */
    protected ?bool $hasSpoiler = null;

    public static function create(
        InputFile|string $media,
        InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
        ?bool $supportsStreaming = null,
        ?bool $hasSpoiler = null,
    ): self {
        $instance = new self();
        $instance->media = $media;
        $instance->thumbnail = $thumbnail;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;
        $instance->width = $width;
        $instance->height = $height;
        $instance->duration = $duration;
        $instance->supportsStreaming = $supportsStreaming;
        $instance->hasSpoiler = $hasSpoiler;

        return $instance;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getMedia(): InputFile|string
    {
        return $this->media;
    }

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
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

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function getSupportsStreaming(): ?bool
    {
        return $this->supportsStreaming;
    }

    public function hasSpoiler(): ?bool
    {
        return $this->hasSpoiler;
    }
}
