<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes that no specific value for the menu button was set.
 */
final class MenuButtonDefault extends MenuButton
{
    public function __construct(
        /**
         * Type of the button, must be default
         */
        public string $type = 'default',
    ) {
        if ($this->type !== 'default') {
            throw new \InvalidArgumentException('type should be "default"');
        }
        parent::__construct($this->type);
    }
}
