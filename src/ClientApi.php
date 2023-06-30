<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramCallbackException;
use Luzrain\TelegramBotApi\Exception\TelegramTypeException;
use Luzrain\TelegramBotApi\Type\Update;

/**
 * Service for handle telegram updates
 */
final class ClientApi
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
     * @throws TelegramCallbackException
     */
    public function handle(Update $update): Method|null
    {
        $callbackResponse = $this->events->handle($update);

        if ($callbackResponse === null) {
            return null;
        }

        if (!$callbackResponse instanceof Method) {
            throw new TelegramCallbackException(get_debug_type($callbackResponse));
        }

        return $callbackResponse;
    }

    /**
     * @deprecated use ClientApi::handle() instead
     * @param string $body raw json request
     * @return string json raw response
     * @throws TelegramCallbackException
     * @throws TelegramTypeException
     */
    public function webhookHandle(string $body): string
    {
        @trigger_error(sprintf('%s is deprecated. Use %s::handle() instead.', __METHOD__, self::class), \E_USER_DEPRECATED);
        $callbackResponse = $this->handle(Update::fromJson($body));
        return json_encode($callbackResponse, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @deprecated
     * @param list<Update> $updates
     */
    public function updatesHandle(array $updates): void
    {
        @trigger_error(sprintf('%s is deprecated. Use %s::handle() instead.', __METHOD__, self::class), \E_USER_DEPRECATED);
        foreach ($updates as $update) {
            $this->events->handle($update);
        }
        $this->events->reset();
    }

    /**
     * @throws TelegramCallbackException
     * @throws TelegramTypeException
     */
    public function run(): never
    {
        $requestBody = file_get_contents('php://input');
        $callbackResponse = $this->handle(Update::fromJson($requestBody));
        $responseBody = json_encode($callbackResponse, JSON_UNESCAPED_UNICODE);
        header('Content-Type: application/json');
        header('Content-Length: ' . strlen($responseBody));
        echo $responseBody;
        exit;
    }
}
