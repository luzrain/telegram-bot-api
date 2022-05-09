<?php

namespace TelegramBot\Api\Types;

/**
 * Represents a general file to be sent.
 */
class InputMediaDocument extends InputMedia
{
    protected static array $requiredParams = [
        'type',
        'media',
    ];

    protected static array $map = [
        'type' => true,
        'media' => true,
        'thumb' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => true,
        'disable_content_type_detection' => true,
    ];

    /**
     * Type of the result, must be document
     */
    protected string $type;

    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload
     * a new one using multipart/form-data under <file_attach_name> name.
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    protected string $media;

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
     * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320.
     * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file,
     * so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>.
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    protected InputFile|string|null $thumb = null;

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
    protected ?Array $captionEntities = null;

    /**
     * Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data.
     * Always True, if the document is sent as part of an album.
     */
    protected ?bool $disableContentTypeDetection = null;

    public function getType(): string
    {
        return $this->type;
    }

    public function getMedia(): string
    {
        return $this->media;
    }

    public function getThumb(): InputFile|string|null
    {
        return $this->thumb;
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

    public function isDisableContentTypeDetection(): ?bool
    {
        return $this->disableContentTypeDetection;
    }
}