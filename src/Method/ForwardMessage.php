<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\SuggestedPostParameters;

/**
 * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded.
 * On success, the sent Message is returned.
 *
 * @extends Method<Message>
 */
final class ForwardMessage extends Method
{
    protected static string $methodName = 'forwardMessage';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target bot, supergroup or channel in the format @username
         */
        protected int|string $chatId,

        /**
         * Unique identifier for the chat where the original message was sent (or username of the target bot, supergroup or channel in the format @username)
         */
        protected int|string $fromChatId,

        /**
         * Message identifier in the chat specified in from_chat_id
         */
        protected int|string $messageId,

        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
         */
        protected int|null $messageThreadId = null,

        /**
         * Identifier of the direct messages topic to which the message will be forwarded; required if the message is forwarded to a direct messages chat
         */
        protected int|null $directMessagesTopicId = null,

        /**
         * New start timestamp for the forwarded video in the message
         */
        protected int|null $videoStartTimestamp = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the forwarded message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * Unique identifier of the message effect to be added to the message; only available when forwarding to private chats
         */
        protected string|null $messageEffectId = null,

        /**
         * A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only
         */
        protected SuggestedPostParameters|null $suggestedPostParameters = null,
    ) {
    }
}
