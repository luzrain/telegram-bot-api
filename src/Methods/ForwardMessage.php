<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\Message;

/**
 * Use this method to forward messages of any kind. Service messages can't be forwarded.
 * On success, the sent Message is returned.
 */
final class ForwardMessage extends BaseMethod
{
    protected static string $methodName = 'forwardMessage';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
         */
        protected int|string $fromChatId,

        /**
         * Message identifier in the chat specified in from_chat_id
         */
        protected int|string $messageId,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * Protects the contents of the forwarded message from forwarding and saving
         */
        protected bool|null $disableNotification = null,

        /**
         * Message identifier in the chat specified in from_chat_id
         */
        protected bool|null $protectContent = null,
    ) {
    }
}
