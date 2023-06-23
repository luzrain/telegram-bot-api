<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
final class InlineQueryResultAudio extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'audio_url' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'performer' => true,
        'audio_duration' => true,
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
     * A valid URL for the audio file
     */
    protected string $audioUrl;

    /**
     * Title
     */
    protected string $title;

    /**
     * Optional. Caption, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     */
    protected ?string $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected ?array $captionEntities = null;

    /**
     * Optional. Performer
     */
    protected ?string $performer = null;

    /**
     * Optional. Audio duration in seconds
     */
    protected ?int $audioDuration = null;

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
        string $audioUrl,
        string $title,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?string $performer = null,
        ?int $audioDuration = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->audioUrl = $audioUrl;
        $instance->title = $title;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;
        $instance->performer = $performer;
        $instance->audioDuration = $audioDuration;
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

    public function getAudioUrl(): string
    {
        return $this->audioUrl;
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

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    public function getAudioDuration(): ?int
    {
        return $this->audioDuration;
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
