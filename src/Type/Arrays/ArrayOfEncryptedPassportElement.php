<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\Type\Passport\EncryptedPassportElement;

final class ArrayOfEncryptedPassportElement extends BaseArray
{
    protected static string $type = EncryptedPassportElement::class;
}
