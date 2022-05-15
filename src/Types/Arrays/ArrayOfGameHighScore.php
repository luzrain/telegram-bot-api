<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\Games\GameHighScore;

class ArrayOfGameHighScore extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = GameHighScore::class;
}
