<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a file stored on the Telegram servers. By default, this file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 */
final class InlineQueryResultCachedDocument extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'document_file_id' => true,
        'title' => true,
        'description' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be document
     */
    protected string $type = 'document';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid file identifier for the file
     */
    protected string $documentFileId;

    /**
     * Title for the result
     */
    protected string $title;

    /**
     * Optional. Short description of the result
     */
    protected string|null $description = null;

    /**
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     */
    protected string|null $caption = null;

    /**
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the file
     */
    protected InputMessageContent|null $inputMessageContent = null;

    public static function create(
        string $id,
        string $documentFileId,
        string $title,
        string|null $description = null,
        string|null $caption = null,
        string|null $parseMode = null,
        array|null $captionEntities = null,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->documentFileId = $documentFileId;
        $instance->title = $title;
        $instance->description = $description;
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

    public function getDocumentFileId(): string
    {
        return $this->documentFileId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string|null
    {
        return $this->description;
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
