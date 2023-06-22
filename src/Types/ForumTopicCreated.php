<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a service message about a new forum topic created in the chat.
 */
class ForumTopicCreated extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'name',
        'icon_color',
    ];

    protected static array $map = [
        'name' => true,
        'icon_color' => true,
        'icon_custom_emoji_id' => true,
    ];

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
