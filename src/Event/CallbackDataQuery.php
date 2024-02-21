<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type;

final class CallbackDataQuery extends Event
{
    public function __construct(private readonly string $data, \Closure $action)
    {
        parent::__construct($action);
    }

    public function executeChecker(Type\Update $update): bool
    {
        return $this->data !== '' && $update->callbackQuery?->data === $this->data;
    }

    public function executeCallback(Type\Update $update): mixed
    {
        return $this->callback($update->callbackQuery);
    }
}
