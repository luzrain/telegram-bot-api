<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

interface TypeDenormalizable
{
    /**
     * @return Type|list<Type>|list<list<Type>>
     */
    public static function fromArray(array $data): Type|array;
}
