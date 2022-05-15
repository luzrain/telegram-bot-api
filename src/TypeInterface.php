<?php

declare(strict_types=1);

namespace TelegramBot\Api;

interface TypeInterface
{
    public static function fromResponse(array $data): BaseType;
}
