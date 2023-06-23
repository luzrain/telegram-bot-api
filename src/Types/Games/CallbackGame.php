<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Games;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * A placeholder, currently holds no information. Use BotFather to set up your game.
 */
final class CallbackGame extends BaseType implements TypeInterface
{
    public static function create()
    {
        return new self();
    }
}
