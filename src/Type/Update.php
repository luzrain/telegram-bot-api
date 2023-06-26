<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Inline\ChosenInlineResult;
use Luzrain\TelegramBotApi\Type\Inline\InlineQuery;
use Luzrain\TelegramBotApi\Type\Payments\PreCheckoutQuery;
use Luzrain\TelegramBotApi\Type\Payments\ShippingQuery;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents an incoming update.
 * At most one of the optional parameters can be present in any given update.
 */
final readonly class Update extends Type implements TypeDenormalizable
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

    protected function __construct(
        /**
         * The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially.
         * This ID becomes especially handy if you're using Webhooks, since it allows you to ignore repeated updates or to
         * restore the correct update sequence, should they get out of order. If there are no new updates for at least a week,
         * then identifier of the next update will be chosen randomly instead of sequentially.
         */
        public int $updateId,

        /**
         * Optional. New incoming message of any kind — text, photo, sticker, etc.
         */
        public Message|null $message = null,

        /**
         * Optional. New version of a message that is known to the bot and was edited
         */
        public Message|null $editedMessage = null,

        /**
         * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
         */
        public Message|null $channelPost = null,

        /**
         * Optional. New version of a channel post that is known to the bot and was edited
         */
        public Message|null $editedChannelPost = null,

        /**
         * Optional. New incoming inline query
         */
        public InlineQuery|null $inlineQuery = null,

        /**
         * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
         * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
         */
        public ChosenInlineResult|null $chosenInlineResult = null,

        /**
         * Optional. New incoming callback query
         */
        public CallbackQuery|null $callbackQuery = null,

        /**
         * Optional. New incoming shipping query. Only for invoices with flexible price
         */
        public ShippingQuery|null $shippingQuery = null,
        /**
         * Optional. New incoming pre-checkout query. Contains full information about checkout
         */
        public PreCheckoutQuery|null $preCheckoutQuery = null,

        /**
         * Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
         */
        public Poll|null $poll = null,

        /**
         * Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
         */
        public PollAnswer|null $pollAnswer = null,

        /**
         * Optional. The bot's chat member status was updated in a chat.
         * For private chats, this update is received only when the bot is blocked or unblocked by the user.
         */
        public ChatMemberUpdated|null $myChatMember = null,

        /**
         * Optional. A chat member's status was updated in a chat.
         * The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of allowed_updates to receive these updates.
         */
        public ChatMemberUpdated|null $chatMember = null,

        /**
         * Optional. A request to join the chat has been sent.
         * The bot must have the can_invite_users administrator right in the chat to receive these updates.
         */
        public ChatJoinRequest|null $chatJoinRequest = null,
    ) {
    }
}
