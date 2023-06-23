<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type\Update as UpdateType;

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
