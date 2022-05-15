<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\Payments\LabeledPrice;

class ArrayOfLabeledPrice extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = LabeledPrice::class;
}
