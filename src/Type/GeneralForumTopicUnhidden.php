<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a service message about General forum topic unhidden in the chat. Currently holds no information.
 */
final readonly class GeneralForumTopicUnhidden extends Type implements TypeDenormalizable
{
    protected function __construct()
    {
    }
}
