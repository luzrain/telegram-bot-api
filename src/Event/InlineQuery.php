<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type\Update;

final class InlineQuery extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->inlineQuery !== null;
    }

    public function executeAction(Update $update): mixed
    {
        return $this->callback($update->inlineQuery);
    }
}
