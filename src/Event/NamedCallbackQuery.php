<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type;

final class NamedCallbackQuery extends Event
{
    public function __construct(private readonly string $callbackData, \Closure $action)
    {
        parent::__construct($action);
    }

    public function executeChecker(Type\Update $update): bool
    {
        return $this->callbackData !== '' && $update->callbackQuery?->data === $this->callbackData;
    }

    public function executeCallback(Type\Update $update): mixed
    {
        return $this->callback($update->callbackQuery);
    }
}
