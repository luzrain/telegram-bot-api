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
readonly class MenuButton extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Type of the button
         */
        public string $type,
    ) {
    }

    /**
     * @psalm-suppress UndefinedPropertyFetch
     * @psalm-suppress UnhandledMatchCondition
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        $instance = parent::fromArray($data);

        if (self::class !== static::class) {
            return $instance;
        }

        return match ($instance->type) {
            'commands' => MenuButtonCommands::fromArray($data),
            'web_app' => MenuButtonWebApp::fromArray($data),
            'default' => MenuButtonDefault::fromArray($data),
        };
    }
}
