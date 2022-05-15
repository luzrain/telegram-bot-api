<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\Payments\PassportFile;

class ArrayOfPassportFile extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = PassportFile::class;
}
