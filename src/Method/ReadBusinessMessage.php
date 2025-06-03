<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Marks incoming message as read on behalf of a business account. Requires the can_read_messages business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class ReadBusinessMessage extends Method
{
    protected static string $methodName = 'readBusinessMessage';

    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which to read the message
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier of the chat in which the message was received. The chat must have been active in the last 24 hours.
         */
        protected int $chatId,

        /**
         * Unique identifier of the message to mark as read
         */
        protected int $messageId,
    ) {
    }
}
