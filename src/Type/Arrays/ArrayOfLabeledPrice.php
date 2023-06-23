<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Type\Payments\LabeledPrice;

final class ArrayOfLabeledPrice extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = LabeledPrice::class;
}
