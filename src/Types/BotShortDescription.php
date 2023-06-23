<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents the bot's short description.
 */
final class BotShortDescription extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'short_description',
    ];

    protected static array $map = [
        'short_description' => true,
    ];

    /**
     * The bot's short description
     */
    protected string $shortDescription;

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
}
