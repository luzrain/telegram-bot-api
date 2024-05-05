<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object is received when messages are deleted from a connected business account.
 */
final readonly class BusinessMessagesDeleted extends Type
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        public string $businessConnectionId,

        /**
         * Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
         */
        public Chat $chat,

        /**
         * The list of identifiers of deleted messages in the chat of the business account
         *
         * @var list<int>
         */
        public array $messageIds,
    ) {
    }
}
