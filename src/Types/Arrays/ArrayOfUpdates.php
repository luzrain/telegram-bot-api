<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\Update;

class ArrayOfUpdates extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = Update::class;
}
