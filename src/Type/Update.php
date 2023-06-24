<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\Inline\ChosenInlineResult;
use Luzrain\TelegramBotApi\Type\Inline\InlineQuery;
use Luzrain\TelegramBotApi\Type\Payments\PreCheckoutQuery;
use Luzrain\TelegramBotApi\Type\Payments\ShippingQuery;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an incoming update.
 * At most one of the optional parameters can be present in any given update.
 */
final class Update extends BaseType implements TypeInterface
{
    public const MESSAGE_TYPE = 'message';
    public const EDITED_MESSAGE_TYPE = 'edited_message';
    public const CHANNEL_POST_TYPE = 'channel_post';
    public const EDITED_CHANNEL_POST_TYPE = 'edited_channel_post';
    public const INLINE_QUERY_TYPE = 'inline_query';
    public const CHOSEN_INLINE_RESULT_TYPE = 'chosen_inline_result';
    public const CALLBACK_QUERY_TYPE = 'callback_query';
    public const SHIPPING_QUERY_TYPE = 'shipping_query';
    public const PRE_CHECKOUT_QUERY_TYPE = 'pre_checkout_query';
    public const POLL_TYPE = 'poll';
    public const POLL_ANSWER_TYPE = 'poll_answer';
    public const MY_CHAT_MEMBER_TYPE = 'my_chat_member';
    public const CHAT_MEMBER_TYPE = 'chat_member';
    public const CHAT_JOIN_REQUEST_TYPE = 'chat_join_request';

    protected static array $requiredParams = [
        'update_id',
    ];

    protected static array $map = [
        'update_id' => true,
        'message' => Message::class,
        'edited_message' => Message::class,
        'channel_post' => Message::class,
        'edited_channel_post' => Message::class,
        'inline_query' => InlineQuery::class,
        'chosen_inline_result' => ChosenInlineResult::class,
        'callback_query' => CallbackQuery::class,
        'shipping_query' => ShippingQuery::class,
        'pre_checkout_query' => PreCheckoutQuery::class,
        'poll' => Poll::class,
        'poll_answer' => PollAnswer::class,
        'my_chat_member' => ChatMemberUpdated::class,
        'chat_member' => ChatMemberUpdated::class,
        'chat_join_request' => ChatJoinRequest::class,
    ];

    /**
     * The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially.
     * This ID becomes especially handy if you're using Webhooks, since it allows you to ignore repeated updates or to
     * restore the correct update sequence, should they get out of order. If there are no new updates for at least a week,
     * then identifier of the next update will be chosen randomly instead of sequentially.
     */
    protected int $updateId;

    /**
     * Optional. New incoming message of any kind — text, photo, sticker, etc.
     */
    protected Message|null $message = null;

    /**
     * Optional. New version of a message that is known to the bot and was edited
     */
    protected Message|null $editedMessage = null;

    /**
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     */
    protected Message|null $channelPost = null;

    /**
     * Optional. New version of a channel post that is known to the bot and was edited
     */
    protected Message|null $editedChannelPost = null;

    /**
     * Optional. New incoming inline query
     */
    protected InlineQuery|null $inlineQuery = null;

    /**
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     */
    protected ChosenInlineResult|null $chosenInlineResult = null;

    /**
     * Optional. New incoming callback query
     */
    protected CallbackQuery|null $callbackQuery = null;

    /**
     * Optional. New incoming shipping query. Only for invoices with flexible price
     */
    protected ShippingQuery|null $shippingQuery = null;

    /**
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     */
    protected PreCheckoutQuery|null $preCheckoutQuery = null;

    /**
     * Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     */
    protected Poll|null $poll = null;

    /**
     * Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     */
    protected PollAnswer|null $pollAnswer = null;

    /**
     * Optional. The bot's chat member status was updated in a chat.
     * For private chats, this update is received only when the bot is blocked or unblocked by the user.
     */
    protected ChatMemberUpdated|null $myChatMember = null;

    /**
     * Optional. A chat member's status was updated in a chat.
     * The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of allowed_updates to receive these updates.
     */
    protected ChatMemberUpdated|null $chatMember = null;

    /**
     * Optional. A request to join the chat has been sent.
     * The bot must have the can_invite_users administrator right in the chat to receive these updates.
     */
    protected ChatJoinRequest|null $chatJoinRequest = null;

    public function getUpdateId(): int
    {
        return $this->updateId;
    }

    public function getMessage(): Message|null
    {
        return $this->message;
    }

    public function getEditedMessage(): Message|null
    {
        return $this->editedMessage;
    }

    public function getChannelPost(): Message|null
    {
        return $this->channelPost;
    }

    public function getEditedChannelPost(): Message|null
    {
        return $this->editedChannelPost;
    }

    public function getInlineQuery(): InlineQuery|null
    {
        return $this->inlineQuery;
    }

    public function getChosenInlineResult(): ChosenInlineResult|null
    {
        return $this->chosenInlineResult;
    }

    public function getCallbackQuery(): CallbackQuery|null
    {
        return $this->callbackQuery;
    }

    public function getShippingQuery(): ShippingQuery|null
    {
        return $this->shippingQuery;
    }

    public function getPreCheckoutQuery(): PreCheckoutQuery|null
    {
        return $this->preCheckoutQuery;
    }

    public function getPoll(): Poll|null
    {
        return $this->poll;
    }

    public function getPollAnswer(): PollAnswer|null
    {
        return $this->pollAnswer;
    }

    public function getMyChatMember(): ChatMemberUpdated|null
    {
        return $this->myChatMember;
    }

    public function getChatMember(): ChatMemberUpdated|null
    {
        return $this->chatMember;
    }

    public function getChatJoinRequest(): ChatJoinRequest|null
    {
        return $this->chatJoinRequest;
    }
}
