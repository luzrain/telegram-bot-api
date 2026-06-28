<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ForceReply;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\InputRichMessage;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;
use Luzrain\TelegramBotApi\Type\ReplyParameters;
use Luzrain\TelegramBotApi\Type\SuggestedPostParameters;

/**
 * Use this method to send rich messages. If the message contains a block with a media element, then the bot must have the right to send the media to the chat.
 * On success, the sent Message is returned.
 *
 * @extends Method<Message>
 */
final class SendRichMessage extends Method
{
    protected static string $methodName = 'sendRichMessage';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target bot, supergroup or channel in the format @username
         */
        protected int|string $chatId,

        /**
         * The message to be sent
         */
        protected InputRichMessage $richMessage,

        /**
         * Unique identifier of the business connection on behalf of which the message will be sent. Bot can send rich messages on behalf of a business account only if the corresponding user can send rich messages.
         */
        protected string|null $businessConnectionId = null,

        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
         */
        protected int|null $messageThreadId = null,

        /**
         * Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
         */
        protected int|null $directMessagesTopicId = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
         */
        protected bool|null $allowPaidBroadcast = null,

        /**
         * Unique identifier of the message effect to be added to the message; for private chats only
         */
        protected string|null $messageEffectId = null,

        /**
         * A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only.
         * If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
         */
        protected SuggestedPostParameters|null $suggestedPostParameters = null,

        /**
         * Description of the message to reply to
         */
        protected ReplyParameters|null $replyParameters = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user.
         */
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
    }
}
