<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Event;

use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Type;

/**
 * Bot command
 */
final class Command extends Event
{
    public function __construct(private readonly string $command, \Closure $action)
    {
        parent::__construct($action);
    }

    public function executeChecker(Type\Update $update): bool
    {
        $entity = $update->message?->entities[0] ?? null;
        if ($entity?->type !== Type\MessageEntity::BOT_COMMAND || $entity?->offset !== 0) {
            return false;
        }

        return $this->command === \substr($update->message->text, $entity->offset, $entity->length);
    }

    public function executeCallback(Type\Update $update): mixed
    {
        $params = \array_filter(\explode(' ', $update->message->text));
        \array_shift($params);

        return $this->callback($update->message, ...$params);
    }
}
