<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

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
