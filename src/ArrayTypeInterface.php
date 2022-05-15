<?php

declare(strict_types=1);

namespace TelegramBot\Api;

interface ArrayTypeInterface
{
    public static function fromResponse(array $data): array;
}
