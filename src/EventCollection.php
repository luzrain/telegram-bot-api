<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Type\Update;

final class EventCollection
{
    /**
     * @var list<Event> list of events.
     */
    protected array $events = [];

    public function add(Event $event): void
    {
        $this->events[] = $event;
    }

    public function reset(): void
    {
        $this->events = [];
    }

    public function handle(Update $update): mixed
    {
        foreach ($this->events as $event) {
            if ($event->executeChecker($update)) {
                $callbackResponse = $event->executeCallback($update);
                if ($callbackResponse !== null) {
                    return $callbackResponse;
                }
            }
        }

        return null;
    }
}
