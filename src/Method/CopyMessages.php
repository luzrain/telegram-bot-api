<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\MessageId;

/**
 * Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped.
 * Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied.
 * A quiz poll can be copied only if the value of the field correct_option_id is known to the bot.
 * The method is analogous to the method forwardMessages, but the copied messages don't have a link to the original message.
 * Album grouping is kept for copied messages.
 * On success, an array of MessageId of the sent messages is returned.
 *
 * @extends Method<list<MessageId>>
 */
final class CopyMessages extends Method
{
    protected static string $methodName = 'copyMessages';
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
         * Identifiers of 1-100 messages in the chat from_chat_id to copy. The identifiers must be specified in a strictly increasing order.
         *
         * @var list<int>
         */
        protected array $messageIds,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
         */
        protected int|null $directMessagesTopicId = null,

        /**
         * Sends the messages silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent messages from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * Pass True to copy the messages without their captions
         */
        protected bool|null $removeCaption = null,
    ) {
    }
}
