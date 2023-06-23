<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents the bot's name.
 */
class BotName extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'name',
    ];

    protected static array $map = [
        'name' => true,
    ];

    /**
     * The bot's name
     */
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }
}
