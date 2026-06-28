<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Internal;

/**
 * @internal
 */
interface TypeDefinition
{
    public function create(string|array $data): mixed;
}
