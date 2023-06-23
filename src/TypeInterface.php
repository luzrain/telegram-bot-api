<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

interface TypeInterface
{
    public static function fromResponse(array $data): BaseType;
}
