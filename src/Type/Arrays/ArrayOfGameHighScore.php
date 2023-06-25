<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Type\Games\GameHighScore;

final class ArrayOfGameHighScore extends BaseArray
{
    protected static string $type = GameHighScore::class;
}
