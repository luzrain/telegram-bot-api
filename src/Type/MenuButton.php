<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the bot's menu button in a private chat. It should be one of
 *
 * @see MenuButtonCommands
 * @see MenuButtonWebApp
 * @see MenuButtonDefault
 */
readonly class MenuButton extends Type
{
    protected function __construct(
        /**
         * Type of the button
         */
        public string $type,
    ) {
    }

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        /** @var self $instance */
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            MenuButtonCommands::TYPE => MenuButtonCommands::fromArray($data),
            MenuButtonWebApp::TYPE => MenuButtonWebApp::fromArray($data),
            MenuButtonDefault::TYPE => MenuButtonDefault::fromArray($data),
        };
    }
}
