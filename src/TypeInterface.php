<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

interface TypeInterface
{
    /**
     * @param array $data
     * @return BaseType|list<BaseType>|list<list<BaseType>>
     */
    public static function fromArray(array $data): BaseType|array;
}
