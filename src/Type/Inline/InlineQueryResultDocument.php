<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 * Currently, only .PDF and .ZIP files can be sent using this method.
 */
final class InlineQueryResultDocument extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'title' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'document_url' => true,
        'mime_type' => true,
        'description' => true,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
        'thumbnail_url' => true,
        'thumbnail_width' => true,
        'thumbnail_height' => true,
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
     * Title for the result
     */
    protected string $title;

    /**
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     */
    protected string|null $caption = null;

    /**
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     */
    protected string|null $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected array|null $captionEntities = null;

    /**
     * A valid URL for the file
     */
    protected string|null $documentUrl = null;

    /**
     * Mime type of the content of the file, either “application/pdf” or “application/zip”
     */
    protected string|null $mimeType = null;

    /**
     * Optional. Short description of the result
     */
    protected string|null $description = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the file
     */
    protected InputMessageContent|null $inputMessageContent = null;

    /**
     * Optional. URL of the thumbnail (JPEG only) for the file
     */
    protected string|null $thumbnailUrl = null;

    /**
     * Optional. Thumbnail width
     */
    protected int|null $thumbnailWidth = null;

    /**
     * Optional. Thumbnail height
     */
    protected int|null $thumbnailHeight = null;

    public static function create(
        string $id,
        string $title,
        string|null $caption = null,
        string|null $parseMode = null,
        array|null $captionEntities = null,
        string|null $documentUrl = null,
        string|null $mimeType = null,
        string|null $description = null,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
        string|null $thumbnailUrl = null,
        int|null $thumbnailWidth = null,
        int|null $thumbnailHeight = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->title = $title;
        $instance->caption = $caption;
        $instance->parseMode = $parseMode;
        $instance->captionEntities = $captionEntities;
        $instance->documentUrl = $documentUrl;
        $instance->mimeType = $mimeType;
        $instance->description = $description;
        $instance->replyMarkup = $replyMarkup;
        $instance->inputMessageContent = $inputMessageContent;
        $instance->thumbnailUrl = $thumbnailUrl;
        $instance->thumbnailWidth = $thumbnailWidth;
        $instance->thumbnailHeight = $thumbnailHeight;

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

    public function getDocumentUrl(): string|null
    {
        return $this->documentUrl;
    }

    public function getMimeType(): string|null
    {
        return $this->mimeType;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    public function getThumbnailUrl(): string|null
    {
        return $this->thumbnailUrl;
    }

    public function getThumbnailWidth(): int|null
    {
        return $this->thumbnailWidth;
    }

    public function getThumbnailHeight(): int|null
    {
        return $this->thumbnailHeight;
    }
}
