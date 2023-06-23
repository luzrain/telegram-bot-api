<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Events\Event;

use Luzrain\TelegramBotApi\Events\Event;
use Luzrain\TelegramBotApi\Types\Update;

final class ChosenInlineResult extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->getChosenInlineResult() !== null;
    }

    public function executeAction(Update $update): mixed
    {
        return $this->callback($update->getChosenInlineResult());
    }
}
