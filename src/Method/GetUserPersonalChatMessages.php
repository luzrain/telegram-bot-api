<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Message;

/**
 * Use this method to get the last messages from the personal chat (i.e., the chat currently added to their profile) of a given user.
 * On success, an array of Message objects is returned.
 *
 * @extends Method<list<Message>>
 */
final class GetUserPersonalChatMessages extends Method
{
    protected static string $methodName = 'getUserPersonalChatMessages';
    protected static string $responseClass = Message::class;
    protected static bool $isArrayOfResponse = true;

    public function __construct(
        /**
         * Unique identifier for the target user
         */
        protected int $userId,

        /**
         * The maximum number of messages to return; 1-20
         */
        protected int $limit,
    ) {
    }
}
