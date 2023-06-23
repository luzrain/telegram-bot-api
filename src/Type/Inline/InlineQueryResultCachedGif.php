<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to an animated GIF file stored on the Telegram servers.
 * By default, this animated GIF file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with specified content instead of the animation.
 */
final class InlineQueryResultCachedGif extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'gif_file_id' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be gif
     */
    protected string $type = 'gif';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid file identifier for the GIF file
     */
    protected string $gifFileId;

    /**
     * Optional. Title for the result
     */
    protected ?string $title = null;

    /**
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     */
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the GIF animation
     */
    protected ?InputMessageContent $inputMessageContent = null;

    public static function create(
        string $id,
        string $gifFileId,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->gifFileId = $gifFileId;
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

    public function getGifFileId(): string
    {
        return $this->gifFileId;
    }

    public function getTitle(): ?string
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

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
