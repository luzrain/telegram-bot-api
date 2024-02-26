<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

interface TypeDenormalizable
{
    public static function fromArray(array $data): Type|array;
}
