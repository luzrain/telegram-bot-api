<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Delete messages on behalf of a business account. Requires the can_delete_sent_messages business bot right to delete messages sent by the bot itself, or the can_delete_all_messages business bot right to delete any message.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class DeleteBusinessMessages extends Method
{
    protected static string $methodName = 'deleteBusinessMessages';

    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which to delete the messages
         */
        protected string $businessConnectionId,

        /**
         * A JSON-serialized list of 1-100 identifiers of messages to delete. All messages must be from the same chat. See deleteMessage for limitations on which messages can be deleted
         *
         * @var list<int>
         */
        protected array $messageIds,
    ) {
    }
}
