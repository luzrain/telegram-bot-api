<?php

namespace TelegramBot\Api;

use Closure;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Events\EventCollection;
use TelegramBot\Api\Events\Events\CallbackQuery;
use TelegramBot\Api\Events\Events\ChannelPost;
use TelegramBot\Api\Events\Events\ChosenInlineResult;
use TelegramBot\Api\Events\Events\Command;
use TelegramBot\Api\Events\Events\EditedChannelPost;
use TelegramBot\Api\Events\Events\EditedMessage;
use TelegramBot\Api\Events\Events\InlineQuery;
use TelegramBot\Api\Events\Events\Message;
use TelegramBot\Api\Events\Events\PreCheckoutQuery;
use TelegramBot\Api\Events\Events\ShippingQuery;
use TelegramBot\Api\Exceptions\InvalidJsonException;
use TelegramBot\Api\Types\Update;

class Client
{
    private EventCollection $events;

    public function __construct()
    {
        $this->events = new EventCollection();
    }

    /**
     * Command.
     */
    public function command(string $name, Closure $action): self
    {
        return $this->on(new Command($name, $action));
    }

    /**
     * New incoming message of any kind — text, photo, sticker, etc.
     */
    public function message(Closure $action): self
    {
        return $this->on(new Message($action));
    }

    /**
     * New version of a message that is known to the bot and was edited.
     */
    public function editedMessage(Closure $action): self
    {
        return $this->on(new EditedMessage($action));
    }

    /**
     * New incoming channel post of any kind — text, photo, sticker, etc.
     */
    public function channelPost(Closure $action): self
    {
        return $this->on(new ChannelPost($action));
    }

    /**
     * New version of a channel post that is known to the bot and was edited.
     */
    public function editedChannelPost(Closure $action): self
    {
        return $this->on(new EditedChannelPost($action));
    }

    /**
     * New incoming inline query.
     */
    public function inlineQuery(Closure $action): self
    {
        return $this->on(new InlineQuery($action));
    }

    /**
     * The result of an inline query that was chosen by a user and sent to their chat partner.
     */
    public function chosenInlineResult(Closure $action): self
    {
        return $this->on(new ChosenInlineResult($action));
    }

    /**
     * New incoming callback query.
     */
    public function callbackQuery(Closure $action): self
    {
        return $this->on(new CallbackQuery($action));
    }

    /**
     * New incoming shipping query. Only for invoices with flexible price.
     */
    public function shippingQuery(Closure $action): self
    {
        return $this->on(new ShippingQuery($action));
    }

    /**
     * New incoming pre-checkout query. Contains full information about checkout.
     */
    public function preCheckoutQuery(Closure $action): self
    {
        return $this->on(new PreCheckoutQuery($action));
    }

    public function on(Event $event): self
    {
        $this->events->add($event);

        return $this;
    }

    /**
     * Handle updates
     *
     * @param Update[] $updates
     */
    public function handle(array $updates): void
    {
        foreach ($updates as $update) {
            $this->events->handle($update);
        }
    }

    /**
     * Webhook handler
     *
     * @throws InvalidJsonException
     */
    public function run(?string $body = null): void
    {
        $body ??= file_get_contents('php://input');
        $data = BotApi::jsonValidate($body, true);
        $this->handle([Update::fromResponse($data)]);
    }
}
