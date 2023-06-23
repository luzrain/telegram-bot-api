<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Events;

use Luzrain\TelegramBotApi\Types\Update;

final class EventCollection
{
    /**
     * @var Event[] Array of events.
     */
    protected array $events = [];

    public function add(Event $event): self
    {
        $this->events[] = $event;

        return $this;
    }

    public function reset(): self
    {
        $this->events = [];

        return $this;
    }

    public function handle(Update $update): mixed
    {
        foreach ($this->events as $event) {
            if ($event->executeChecker($update)) {
                $callbackResponse = $event->executeAction($update);
                if ($callbackResponse !== null) {
                    return $callbackResponse;
                }
            }
        }

        return null;
    }
}
