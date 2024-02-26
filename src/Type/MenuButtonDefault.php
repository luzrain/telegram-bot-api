<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes that no specific value for the menu button was set.
 */
final readonly class MenuButtonDefault extends MenuButton
{
    public const TYPE = 'default';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
