<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\MessageId;

/**
 * Use this method to forward multiple messages of any kind.
 * If some of the specified messages can't be found or forwarded, they are skipped.
 * Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages.
 * On success, an array of MessageId of the sent messages is returned.
 *
 * @extends Method<list<MessageId>>
 */
final class ForwardMessages extends Method
{
    protected static string $methodName = 'forwardMessages';
    protected static string $responseClass = MessageId::class;
    protected static bool $isArrayOfResponse = true;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier for the chat where the original messages were sent (or channel username in the format @channelusername)
         */
        protected int|string $fromChatId,

        /**
         * Identifiers of 1-100 messages in the chat from_chat_id to forward. The identifiers must be specified in a strictly increasing order.
         *
         * @var list<int>
         */
        protected array $messageIds,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * Identifier of the direct messages topic to which the messages will be forwarded; required if the messages are forwarded to a direct messages chat
         */
        protected int|null $directMessagesTopicId = null,

        /**
         * Sends the messages silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the forwarded messages from forwarding and saving
         */
        protected bool|null $protectContent = null,
    ) {
    }
}
