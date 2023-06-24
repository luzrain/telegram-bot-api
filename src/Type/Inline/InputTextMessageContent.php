<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 */
final class InputTextMessageContent extends InputMessageContent
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
    protected string|null $parseMode = null;

    /**
     * Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     *
     * @var MessageEntity[]
     */
    protected array|null $entities = null;

    /**
     * Optional. Disables link previews for links in the sent message
     */
    protected bool|null $disableWebPagePreview = null;

    public static function create(
        string $messageText,
        string|null $parseMode = null,
        array|null $entities = null,
        bool|null $disableWebPagePreview = null,
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

    public function getParseMode(): string|null
    {
        return $this->parseMode;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): array|null
    {
        return $this->entities;
    }

    public function isDisableWebPagePreview(): bool|null
    {
        return $this->disableWebPagePreview;
    }
}
