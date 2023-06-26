<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type\Update;

final class PollAnswer extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->pollAnswer !== null;
    }

    public function executeCallback(Update $update): mixed
    {
        return $this->callback($update->pollAnswer);
    }
}
