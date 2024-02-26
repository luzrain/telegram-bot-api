<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Exception\TelegramTypeException;
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
    private const UPDATE_TYPES = [
        'message',
        'edited_message',
        'channel_post',
        'edited_channel_post',
        'inline_query',
        'chosen_inline_result',
        'callback_query',
        'shipping_query',
        'pre_checkout_query',
        'poll',
        'poll_answer',
        'my_chat_member',
        'chat_member',
        'chat_join_request',
    ];

    protected function __construct(
        /**
         * The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially.
         * This ID becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to
         * restore the correct update sequence, should they get out of order. If there are no new updates for at least a week,
         * then identifier of the next update will be chosen randomly instead of sequentially.
         */
        public int $updateId,

        /**
         * Optional. New incoming message of any kind - text, photo, sticker, etc.
         */
        public Message|null $message = null,

        /**
         * Optional. New version of a message that is known to the bot and was edited
         */
        public Message|null $editedMessage = null,

        /**
         * Optional. New incoming channel post of any kind - text, photo, sticker, etc.
         */
        public Message|null $channelPost = null,

        /**
         * Optional. New version of a channel post that is known to the bot and was edited
         */
        public Message|null $editedChannelPost = null,

        /**
         * Optional. A reaction to a message was changed by a user.
         * The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of
         * allowed_updates to receive these updates. The update isn't received for reactions set by bots.
         */
        public MessageReactionUpdated|null $messageReaction = null,

        /**
         * Optional. Reactions to a message with anonymous reactions were changed.
         * The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of
         * allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
         */
        public MessageReactionCountUpdated|null $messageReactionCount = null,

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
         * The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of
         * allowed_updates to receive these updates.
         */
        public ChatMemberUpdated|null $chatMember = null,

        /**
         * Optional. A request to join the chat has been sent.
         * The bot must have the can_invite_users administrator right in the chat to receive these updates.
         */
        public ChatJoinRequest|null $chatJoinRequest = null,

        /**
         * Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
         */
        public ChatBoostUpdated|null $chatBoost = null,

        /**
         * Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
         */
        public ChatBoostRemoved|null $removedChatBoost = null,
    ) {
    }

    /**
     * @throws TelegramTypeException
     */
    public static function fromJson(string $json): self
    {
        try {
            $data = \json_decode(json: $json, associative: true, flags: JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw TelegramTypeException::createException(new \ReflectionClass(self::class), $e);
        }

        return self::fromArray($data);
    }

    public static function getUpdateTypes(): array
    {
        return self::UPDATE_TYPES;
    }
}
