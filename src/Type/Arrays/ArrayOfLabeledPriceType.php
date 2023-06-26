<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\Payments\LabeledPrice;

final class ArrayOfLabeledPriceType extends ArrayType
{
    protected static string $type = LabeledPrice::class;
}
