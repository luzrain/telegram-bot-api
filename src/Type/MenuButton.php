<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object describes the bot's menu button in a private chat. It should be one of
 *
 * @see MenuButtonCommands
 * @see MenuButtonWebApp
 * @see MenuButtonDefault
 */
class MenuButton extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'type',
    ];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Type of the button
     */
    protected string $type;

    /**
     * @psalm-suppress UndefinedPropertyFetch
     * @psalm-suppress UnhandledMatchCondition
     */
    public static function fromResponse(array $data): static
    {
        $instance = parent::fromResponse($data);

        if (self::class !== static::class) {
            return $instance;
        }

        return match ($instance->type) {
            'commands' => MenuButtonCommands::fromResponse($data),
            'web_app' => MenuButtonWebApp::fromResponse($data),
            'default' => MenuButtonDefault::fromResponse($data),
        };
    }
}
