<?php

namespace TelegramBot\Api\Events\Events;

use Closure;
use ReflectionFunction;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class Command extends Event
{
    private string $command;

    public function __construct(string $command, Closure $action)
    {
        parent::__construct($action);
        $this->command = $command;
    }

    public function executeChecker(Update $update): bool
    {
        $message = $update->getMessage();
        $entity = $message?->getEntities()[0] ?? null;

        if ($entity?->getType() !== 'bot_command' || $entity?->getOffset() !== 0) {
            return false;
        }

        return $this->command === \substr($message->getText(), $entity->getOffset(), $entity->getLength());
    }

    public function executeAction(Update $update): bool
    {
        $message = $update->getMessage();
        $params = \array_filter(\explode(' ', $message->getText()));
        $params[0] = $message;
        $this->getAction()(...$params);

        return true;
    }
}
