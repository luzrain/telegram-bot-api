<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a message about a forwarded story in the chat. Currently holds no information.
 */
final readonly class Story extends Type implements TypeDenormalizable
{
    protected function __construct()
    {
    }
}
