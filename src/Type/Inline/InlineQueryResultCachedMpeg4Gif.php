<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers.
 * By default, this animated MPEG-4 file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
final class InlineQueryResultCachedMpeg4Gif extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'mpeg4_file_id' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be mpeg4_gif
     */
    protected string $type = 'mpeg4_gif';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid file identifier for the MP4 file
     */
    protected string $mpeg4FileId;

    /**
     * Optional. Title for the result
     */
    protected string|null $title = null;

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     */
    protected string|null $caption = null;

    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
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
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the video animation
     */
    protected InputMessageContent|null $inputMessageContent = null;

    public static function create(
        string $id,
        string $mpeg4FileId,
        string|null $title = null,
        string|null $caption = null,
        string|null $parseMode = null,
        array|null $captionEntities = null,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->mpeg4FileId = $mpeg4FileId;
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

    public function getMpeg4FileId(): string
    {
        return $this->mpeg4FileId;
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
