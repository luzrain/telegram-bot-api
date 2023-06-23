<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents the bot's description.
 */
class BotDescription extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'description',
    ];

    protected static array $map = [
        'description' => true,
    ];

    /**
     * The bot's description
     */
    protected string $description;

    public function getDescription(): string
    {
        return $this->description;
    }
}
