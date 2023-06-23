<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Types\Payments\EncryptedPassportElement;

final class ArrayOfEncryptedPassportElement extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = EncryptedPassportElement::class;
}
