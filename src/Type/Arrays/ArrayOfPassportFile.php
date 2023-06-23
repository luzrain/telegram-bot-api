<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Type\Passport\PassportFile;

final class ArrayOfPassportFile extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = PassportFile::class;
}
