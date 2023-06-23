<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Events\Event;

use Luzrain\TelegramBotApi\Events\Event;
use Luzrain\TelegramBotApi\Types\Update as UpdateType;

final class Update extends Event
{
    public function executeChecker(UpdateType $update): bool
    {
        return true;
    }

    public function executeAction(UpdateType $update): mixed
    {
        return $this->callback($update);
    }
}
