<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents the bot's description.
 */
final class BotDescription extends BaseType implements TypeInterface
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
