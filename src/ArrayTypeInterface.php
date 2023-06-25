<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

interface ArrayTypeInterface
{
    public static function fromArray(array $data): array;
}
