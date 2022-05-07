<?php

namespace TelegramBot\Api\Events;

use TelegramBot\Api\Types\Update;

class EventCollection
{
    /**
     * @var Event[] Array of events.
     */
    protected array $events;

    public function add(Event $event): self
    {
        $this->events[] = $event;

        return $this;
    }

    public function handle(Update $update): void
    {
        foreach ($this->events as $event) {
            if ($event->executeChecker($update) === true && $event->executeAction($update) === false) {
                break;
            }
        }
    }
}
