<?php

declare(strict_types=1);

namespace TelegramBot\Api;

use Closure;
use JsonException;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Events\EventCollection;
use TelegramBot\Api\Exceptions\TelegramCallbackException;
use TelegramBot\Api\Types\Update;

/**
 * Service for handle telegram updates
 */
class Client
{
    use Methods;

    private EventCollection $events;

    public function __construct()
    {
        $this->events = new EventCollection();
    }

    /**
     * Any update
     */
    public function onUpdate(Closure $action): self
    {
        return $this->on(new Event\Update($action));
    }

    /**
     * Command
     */
    public function onCommand(string $name, Closure $action): self
    {
        return $this->on(new Event\Command($name, $action));
    }

    /**
     * New incoming message of any kind — text, photo, sticker, etc.
     */
    public function onMessage(Closure $action): self
    {
        return $this->on(new Event\Message($action));
    }

    /**
     * New version of a message that is known to the bot and was edited
     */
    public function onEditedMessage(Closure $action): self
    {
        return $this->on(new Event\EditedMessage($action));
    }

    /**
     * New incoming channel post of any kind — text, photo, sticker, etc.
     */
    public function onChannelPost(Closure $action): self
    {
        return $this->on(new Event\ChannelPost($action));
    }

    /**
     * New version of a channel post that is known to the bot and was edited
     */
    public function onEditedChannelPost(Closure $action): self
    {
        return $this->on(new Event\EditedChannelPost($action));
    }

    /**
     * New incoming inline query
     */
    public function onInlineQuery(Closure $action): self
    {
        return $this->on(new Event\InlineQuery($action));
    }

    /**
     * The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     * @see https://core.telegram.org/bots/inline#collecting-feedback
     */
    public function onChosenInlineResult(Closure $action): self
    {
        return $this->on(new Event\ChosenInlineResult($action));
    }

    /**
     * New incoming callback query.
     */
    public function onCallbackQuery(Closure $action): self
    {
        return $this->on(new Event\CallbackQuery($action));
    }

    /**
     * New incoming shipping query. Only for invoices with flexible price
     */
    public function onShippingQuery(Closure $action): self
    {
        return $this->on(new Event\ShippingQuery($action));
    }

    /**
     * New incoming pre-checkout query. Contains full information about checkout
     */
    public function onPreCheckoutQuery(Closure $action): self
    {
        return $this->on(new Event\PreCheckoutQuery($action));
    }

    /**
     * New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     */
    public function onPoll(Closure $action): self
    {
        return $this->on(new Event\Poll($action));
    }

    /**
     * A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     */
    public function onPollAnswer(Closure $action): self
    {
        return $this->on(new Event\PollAnswer($action));
    }

    /**
     * The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     */
    public function onMyChatMember(Closure $action): self
    {
        return $this->on(new Event\MyChatMember($action));
    }

    /**
     * A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify
     * “chat_member” in the list of allowed_updates to receive these updates.
     */
    public function onChatMember(Closure $action): self
    {
        return $this->on(new Event\ChatMember($action));
    }

    /**
     * A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
     */
    public function onChatJoinRequest(Closure $action): self
    {
        return $this->on(new Event\ChatJoinRequest($action));
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
     * @param Update[] $updates
     */
    public function updatesHandle(array $updates): void
    {
        foreach ($updates as $update) {
            $this->events->handle($update);
        }
    }

    /**
     * Webhook handler
     *
     * @param string $body raw request body
     * @throws JsonException
     */
    public function webhookHandle(string $body): mixed
    {
        $data = json_decode(json: $body, associative: true, flags: JSON_THROW_ON_ERROR);
        $callbackResponse = $this->events->handle(Update::fromResponse($data));
        $this->events->reset();

        return $callbackResponse;
    }

    public function run(): void
    {
        $body = file_get_contents('php://input');
        $callbackResponse = $this->webhookHandle($body);

        if ($callbackResponse !== null && !($callbackResponse instanceof BaseMethod)) {
            throw TelegramCallbackException::createWrongResponseException(get_debug_type($callbackResponse));
        }

        header('Content-Type: application/json');
        echo json_encode($callbackResponse);
        exit;
    }

    public function __call(string $methodName, array $arguments): BaseMethod
    {
        return $this->getMethodObject($methodName, $arguments);
    }
}
