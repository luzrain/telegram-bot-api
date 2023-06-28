<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Type\Update;

final class EventCollection
{
    /**
     * @var list<Event> list of events.
     */
    private array $events = [];

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
            if (!$event->executeChecker($update)) {
                continue;
            }

            $callbackResponse = $event->executeCallback($update);

            if ($callbackResponse === EventCallbackReturn::STOP) {
                return null;
            }

            if ($callbackResponse === null || $callbackResponse === EventCallbackReturn::CONTINUE) {
                continue;
            }

            return $callbackResponse;
        }

        return null;
    }
}
