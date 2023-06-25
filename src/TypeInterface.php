<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

interface TypeInterface
{
    public static function fromArray(array $data): BaseType;
}
