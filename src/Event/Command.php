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
        $message = $update->message;
        $entity = $message?->entities[0] ?? null;

        if ($entity?->type !== MessageEntity::TYPE_BOT_COMMAND || $entity?->offset !== 0) {
            return false;
        }

        return $this->command === \substr($message->text, $entity->offset, $entity->length);
    }

    public function executeCallback(Update $update): mixed
    {
        $message = $update->message;
        $params = \array_filter(\explode(' ', $message->text));
        $params[0] = $message;

        return $this->callback(...$params);
    }
}
