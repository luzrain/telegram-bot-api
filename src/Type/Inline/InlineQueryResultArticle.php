<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a link to an article or web page.
 */
final class InlineQueryResultArticle extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'title' => true,
        'input_message_content' => InputMessageContent::class,
        'reply_markup' => InlineKeyboardMarkup::class,
        'url' => true,
        'hide_url' => true,
        'description' => true,
        'thumbnail_url' => true,
        'thumbnail_width' => true,
        'thumbnail_height' => true,
    ];

    /**
     * Type of the result, must be article
     */
    protected string $type = 'article';

    /**
     * Unique identifier for this result, 1-64 Bytes
     */
    protected string $id;

    /**
     * Title of the result
     */
    protected string $title;

    /**
     * Content of the message to be sent
     */
    protected InputMessageContent $inputMessageContent;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. URL of the result
     */
    protected string|null $url = null;

    /**
     * Optional. Pass True, if you don't want the URL to be shown in the message
     */
    protected bool|null $hideUrl = null;

    /**
     * Optional. Short description of the result
     */
    protected string|null $description = null;

    /**
     * Optional. Url of the thumbnail for the result
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
        InputMessageContent $inputMessageContent,
        InlineKeyboardMarkup|null $replyMarkup = null,
        string|null $url = null,
        bool|null $hideUrl = null,
        string|null $description = null,
        string|null $thumbnailUrl = null,
        int|null $thumbnailWidth = null,
        int|null $thumbnailHeight = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->title = $title;
        $instance->inputMessageContent = $inputMessageContent;
        $instance->replyMarkup = $replyMarkup;
        $instance->url = $url;
        $instance->hideUrl = $hideUrl;
        $instance->description = $description;
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

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }

    public function getUrl(): string|null
    {
        return $this->url;
    }

    public function isHideUrl(): bool|null
    {
        return $this->hideUrl;
    }

    public function getDescription(): string|null
    {
        return $this->description;
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
