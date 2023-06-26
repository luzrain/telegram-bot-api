<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

#[\Attribute(\Attribute::TARGET_PROPERTY)]
final readonly class PropertyType
{
    /**
     * @param class-string<ArrayType> $type
     */
    public function __construct(public string $type)
    {
    }
}
