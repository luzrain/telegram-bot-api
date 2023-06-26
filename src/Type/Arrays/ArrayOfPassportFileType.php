<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\Passport\PassportFile;

final class ArrayOfPassportFileType extends ArrayType
{
    protected static string $type = PassportFile::class;
}
