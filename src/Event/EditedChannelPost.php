<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type\Update;

final class EditedChannelPost extends Event
{
    public function executeChecker(Update $update): bool
    {
        return $update->editedChannelPost !== null;
    }

    public function executeCallback(Update $update): mixed
    {
        return $this->callback($update->editedChannelPost);
    }
}
