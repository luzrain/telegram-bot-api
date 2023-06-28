<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type;

final class Update extends Event
{
    public function executeChecker(Type\Update $update): bool
    {
        return true;
    }

    public function executeCallback(Type\Update $update): mixed
    {
        return $this->callback($update);
    }
}
