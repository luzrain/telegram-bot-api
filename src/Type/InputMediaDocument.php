<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;

/**
 * Represents a general file to be sent.
 */
final class InputMediaDocument extends InputMedia
{
    protected static array $map = [
        'type' => true,
        'media' => true,
        'thumbnail' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'disable_content_type_detection' => true,
    ];

    /**
     * Type of the result, must be document
     */
    protected string $type = 'document';

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
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
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
     * Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data.
     * Always True, if the document is sent as part of an album.
     */
    protected ?bool $disableContentTypeDetection = null;

    public static function create(
        InputFile|string $media,
        InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $disableContentTypeDetection = null,
    ): self {
        $instance = new self();
        $instance->media = $media;
        $instance->thumbnail = $thumbnail;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;
        $instance->disableContentTypeDetection = $disableContentTypeDetection;

        return $instance;
    }

    public function getThumbnail(): InputFile|string|null
    {
        return $this->thumbnail;
    }

    public function getMedia(): InputFile|string|null
    {
        return $this->media;
    }
}
