<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;

/**
 * Represents an audio file to be treated as music to be sent.
 */
final class InputMediaAudio extends InputMedia
{
    protected static array $map = [
        'type' => true,
        'media' => true,
        'thumbnail' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'duration' => true,
        'performer' => true,
        'title' => true,
    ];

    /**
     * Type of the result, must be audio
     */
    protected string $type = 'audio';

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
     * Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
     */
    protected string|null $caption = null;

    /**
     * Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     *
     * @see https://core.telegram.org/bots/api#formatting-options
     */
    protected string|null $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected array|null $captionEntities = null;

    /**
     * Optional. Duration of the audio in seconds
     */
    protected int|null $duration = null;

    /**
     * Optional. Performer of the audio
     */
    protected string|null $performer = null;

    /**
     * Optional. Title of the audio
     */
    protected string|null $title = null;

    public static function create(
        InputFile|string $media,
        InputFile|string|null $thumbnail = null,
        string|null $caption = null,
        string|null $parseMode = null,
        array|null $captionEntities = null,
        int|null $duration = null,
        string|null $performer = null,
        string|null $title = null,
    ): self {
        $instance = new self();
        $instance->media = $media;
        $instance->thumbnail = $thumbnail;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;
        $instance->duration = $duration;
        $instance->performer = $performer;
        $instance->title = $title;

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
