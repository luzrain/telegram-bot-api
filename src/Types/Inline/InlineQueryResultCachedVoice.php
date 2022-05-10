<?php

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\MessageEntity;

/**
 * Represents a link to a voice message stored on the Telegram servers. By default, this voice message will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the voice message.
 */
class InlineQueryResultCachedVoice extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'voice_file_id' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be voice
     */
    protected string $type = 'voice';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid file identifier for the voice message
     */
    protected string $voiceFileId;

    /**
     * Voice message title
     */
    protected string $title;

    /**
     * Optional. Caption, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the voice message
     */
    protected ?InputMessageContent $inputMessageContent = null;

    public static function create(
        string $id,
        string $voiceFileId,
        string $title,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->voiceFileId = $voiceFileId;
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

    public function getVoiceFileId(): string
    {
        return $this->voiceFileId;
    }

    public function getTitle(): string
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
