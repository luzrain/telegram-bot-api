<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a forum topic.
 */
class ForumTopic extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'message_thread_id',
        'name',
        'icon_color',
    ];

    protected static array $map = [
        'message_thread_id' => true,
        'name' => true,
        'icon_color' => true,
        'icon_custom_emoji_id' => true,
    ];

    /**
     * Unique identifier of the forum topic
     */
    protected int $messageThreadId;

    /**
     * Name of the topic
     */
    protected string $name;

    /**
     * Color of the topic icon in RGB format
     */
    protected int $iconColor;

    /**
     * Optional. Unique identifier of the custom emoji shown as the topic icon
     */
    protected ?string $iconCustomEmojiId = null;

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconColor(): int
    {
        return $this->iconColor;
    }

    public function getIconCustomEmojiId(): ?string
    {
        return $this->iconCustomEmojiId;
    }
}
