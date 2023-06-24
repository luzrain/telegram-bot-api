<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramCallbackException;
use Luzrain\TelegramBotApi\Exception\TelegramTypeException;
use Luzrain\TelegramBotApi\Type\Update;

/**
 * Service for handle telegram updates
 */
final class Client
{
    private EventCollection $events;

    public function __construct()
    {
        $this->events = new EventCollection();
    }

    /**
     * Register new event
     */
    public function on(Event $event): self
    {
        $this->events->add($event);

        return $this;
    }

    /**
     * Handle array of updates
     *
     * @param list<Update> $updates
     */
    public function updatesHandle(array $updates): void
    {
        foreach ($updates as $update) {
            $this->events->handle($update);
        }
        $this->events->reset();
    }

    /**
     * Webhook handler
     *
     * @param string $body json request
     * @return string json response
     * @throws TelegramTypeException
     * @throws TelegramCallbackException
     * @throws \JsonException
     */
    public function webhookHandle(string $body): string
    {
        $data = json_decode(json: $body, associative: true, flags: JSON_THROW_ON_ERROR);
        $callbackResponse = $this->events->handle(Update::fromResponse($data));
        $this->events->reset();

        if ($callbackResponse === null) {
            return json_encode(null);
        }

        if (!$callbackResponse instanceof BaseMethod) {
            throw new TelegramCallbackException(get_debug_type($callbackResponse));
        }

        $webhookResponse = array_merge(
            ['method' => $callbackResponse->getMethodName()],
            iterator_to_array($callbackResponse->iterateRequestProps()),
        );

        return json_encode($webhookResponse, JSON_UNESCAPED_UNICODE);
    }
}
