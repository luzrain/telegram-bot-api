<?php

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\MessageEntity;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 * Currently, only .PDF and .ZIP files can be sent using this method.
 */
class InlineQueryResultDocument extends InlineQueryResult
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
        'thumb_url' => true,
        'thumb_width' => true,
        'thumb_height' => true,
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
    protected ?string $caption = null;

    /**
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     */
    protected ?string $parseMode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * 
     * @var MessageEntity[]
     */
    protected ?array $captionEntities = null;

    /**
     * A valid URL for the file
     */
    protected ?string $documentUrl = null;

    /**
     * Mime type of the content of the file, either “application/pdf” or “application/zip”
     */
    protected ?string $mimeType = null;

    /**
     * Optional. Short description of the result
     */
    protected ?string $description = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected ?InlineKeyboardMarkup $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the file
     */
    protected ?InputMessageContent $inputMessageContent = null;

    /**
     * Optional. URL of the thumbnail (JPEG only) for the file
     */
    protected ?string $thumbUrl = null;

    /**
     * Optional. Thumbnail width
     */
    protected ?int $thumbWidth = null;

    /**
     * Optional. Thumbnail height
     */
    protected ?int $thumbHeight = null;

    public static function create(
        string $id,
        string $title,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?string $documentUrl = null,
        ?string $mimeType = null,
        ?string $description = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
        ?string $thumbUrl = null,
        ?int $thumbWidth = null,
        ?int $thumbHeight = null,
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
        $instance->thumbUrl = $thumbUrl;
        $instance->thumbWidth = $thumbWidth;
        $instance->thumbHeight = $thumbHeight;

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

    public function getDocumentUrl(): ?string
    {
        return $this->documentUrl;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }    

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    public function getThumbWidth(): ?int
    {
        return $this->thumbWidth;
    }

    public function getThumbHeight(): ?int
    {
        return $this->thumbHeight;
    }
}
