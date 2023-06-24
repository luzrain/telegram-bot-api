<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type\MessageEntity;
use Luzrain\TelegramBotApi\Type\Update;

final class Command extends Event
{
    public function __construct(private readonly string $command, \Closure $action)
    {
        parent::__construct($action);
    }

    public function executeChecker(Update $update): bool
    {
        $message = $update->getMessage();
        $entity = $message?->getEntities()[0] ?? null;

        if ($entity?->getType() !== MessageEntity::TYPE_BOT_COMMAND || $entity?->getOffset() !== 0) {
            return false;
        }

        return $this->command === \substr($message->getText(), $entity->getOffset(), $entity->getLength());
    }

    public function executeAction(Update $update): mixed
    {
        $message = $update->getMessage();
        $params = \array_filter(\explode(' ', $message->getText()));
        $params[0] = $message;

        return $this->callback(...$params);
    }
}
