<?php

namespace TelegramBot\Api;

interface ArrayTypeInterface
{
    public static function fromResponse(array $data): array;
}
