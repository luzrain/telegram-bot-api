<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS.
 * By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content
 * to send a message with the specified content instead of the the voice message.
 */
final class InlineQueryResultVoice extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'voice_url' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'voice_duration' => true,
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
     * A valid URL for the voice recording
     */
    protected string $voiceUrl;

    /**
     * Recording title
     */
    protected string $title;

    /**
     * Optional. Caption, 0-1024 characters after entities parsing
     */
    protected string|null $caption = null;

    /**
     * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     */
    protected string|null $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected array|null $captionEntities = null;

    /**
     * Optional. Recording duration in seconds
     */
    protected int|null $voiceDuration = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the voice recording
     */
    protected InputMessageContent|null $inputMessageContent = null;

    public static function create(
        string $id,
        string $voiceUrl,
        string $title,
        string|null $caption = null,
        string|null $parseMode = null,
        array|null $captionEntities = null,
        int|null $voiceDuration = null,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->voiceUrl = $voiceUrl;
        $instance->title = $title;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;
        $instance->voiceDuration = $voiceDuration;
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

    public function getVoiceUrl(): string
    {
        return $this->voiceUrl;
    }

    public function getTitle(): string
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

    public function getVoiceDuration(): int|null
    {
        return $this->voiceDuration;
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
