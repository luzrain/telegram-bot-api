<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\BaseArray;
use Luzrain\TelegramBotApi\Type\Passport\PassportFile;

final class ArrayOfPassportFile extends BaseArray
{
    protected static string $type = PassportFile::class;
}
