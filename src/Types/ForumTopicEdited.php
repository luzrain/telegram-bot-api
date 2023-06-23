<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a service message about an edited forum topic.
 */
class ForumTopicEdited extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [
        'name' => true,
        'icon_custom_emoji_id' => true,
    ];

    /**
     * Optional. New name of the topic, if it was edited
     */
    protected string $name;

    /**
     * Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
     */
    protected ?string $iconCustomEmojiId = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconCustomEmojiId(): ?string
    {
        return $this->iconCustomEmojiId;
    }
}
