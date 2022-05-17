<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;

/**
 * Represents a photo to be sent.
 */
class InputMediaPhoto extends InputMedia
{
    protected static array $map = [
        'type' => true,
        'media' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
    ];

    /**
     * Type of the result, must be photo
     */
    protected string $type = 'photo';

    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload
     * a new one using multipart/form-data under <file_attach_name> name.
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    protected InputFile|string $media;

    /**
     * Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
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

    public static function create(
        InputFile|string $media,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
    ): self {
        $instance = new self();
        $instance->media = $media;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;

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
}
