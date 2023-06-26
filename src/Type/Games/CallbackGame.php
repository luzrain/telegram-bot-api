<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Games;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * A placeholder, currently holds no information. Use BotFather to set up your game.
 */
final readonly class CallbackGame extends Type implements TypeDenormalizable
{
    public function __construct()
    {
    }
}
