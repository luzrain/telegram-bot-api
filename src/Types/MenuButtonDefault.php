<?php

namespace TelegramBot\Api\Types;

/**
 * Describes that no specific value for the menu button was set.
 */
class MenuButtonDefault extends MenuButton
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
    protected string $type;

    public function getType(): string
    {
        return $this->type;
    }
}
