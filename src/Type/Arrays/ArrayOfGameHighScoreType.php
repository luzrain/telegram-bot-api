<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\Games\GameHighScore;

final class ArrayOfGameHighScoreType extends ArrayType
{
    protected static string $type = GameHighScore::class;
}
