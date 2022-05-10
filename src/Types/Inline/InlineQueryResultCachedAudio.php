<?php

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\MessageEntity;

/**
 * Represents a link to an MP3 audio file stored on the Telegram servers. By default, this audio file will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
class InlineQueryResultCachedAudio extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'audio_file_id' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be audio
     */
    protected string $type = 'audio';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid file identifier for the audio file
     */
    protected string $audioFileId;

    /**
     * Optional. Caption, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
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
     * Optional. Inline keyboard attached to the message
     */
    protected ?InlineKeyboardMarkup $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the audio
     */
    protected ?InputMessageContent $inputMessageContent = null;

    public static function create(
        string $id,
        string $audioFileId,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->audioFileId = $audioFileId;
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

    public function getAudioFileId(): string
    {
        return $this->audioFileId;
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

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
