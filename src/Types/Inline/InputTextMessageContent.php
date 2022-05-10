<?php

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 */
class InputTextMessageContent extends InputMessageContent
{
    protected static array $map = [
        'message_text' => true,
        'parse_mode' => true,
        'entities' => ArrayOfMessageEntity::class,
        'disable_web_page_preview' => true,
    ];

    /**
     * Text of the message to be sent, 1-4096 characters
     */
    protected string $messageText;

    /**
     * Optional. Mode for parsing entities in the message text. See formatting options for more details.
     */
    protected ?string $parseMode = null;

    /**
     * Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     */
    protected ?array $entities = null;

    /**
     * Optional. Disables link previews for links in the sent message
     */
    protected ?bool $disableWebPagePreview = null;

    public static function create(
        string $messageText,
        ?string $parseMode = null,
        ?array $entities = null,
        ?bool $disableWebPagePreview = null,
    ): self {
        $instance = new self();
        $instance->messageText = $messageText;
        $instance->parseMode = $parseMode;
        $instance->entities = $entities;
        $instance->disableWebPagePreview = $disableWebPagePreview;

        return $instance;
    }

    public function getMessageText(): string
    {
        return $this->messageText;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    public function getEntities(): ?array
    {
        return $this->entities;
    }

    public function isDisableWebPagePreview(): ?bool
    {
        return $this->disableWebPagePreview;
    }
}
