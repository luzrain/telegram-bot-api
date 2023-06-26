<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\Passport\EncryptedPassportElement;

final class ArrayOfEncryptedPassportElementType extends ArrayType
{
    protected static string $type = EncryptedPassportElement::class;
}
