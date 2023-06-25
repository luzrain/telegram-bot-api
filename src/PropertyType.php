<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Type\Arrays\BaseArray;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
final readonly class PropertyType
{
    /** @param class-string<BaseArray> $type */
    public function __construct(public string $type)
    {
    }
}