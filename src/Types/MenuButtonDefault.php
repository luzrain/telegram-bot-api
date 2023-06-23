<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

/**
 * Describes that no specific value for the menu button was set.
 */
final class MenuButtonDefault extends MenuButton
{
    protected static array $requiredParams = [
        'type',
    ];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Type of the button, must be default
     */
    protected string $type = 'default';

    public static function create(): self
    {
        return new self();
    }

    public function getType(): string
    {
        return $this->type;
    }
}
