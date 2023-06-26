<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\BaseArray;
use Luzrain\TelegramBotApi\Type\Payments\LabeledPrice;

final class ArrayOfLabeledPrice extends BaseArray
{
    protected static string $type = LabeledPrice::class;
}
