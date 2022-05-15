<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\Message;

/**
 * Use this method to set the score of the specified user in a game message.
 * On success, if the message is not an inline message, the Message is returned, otherwise True is returned.
 * Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
 */
final class SetGameScore extends BaseMethod
{
    protected static string $methodName = 'setGameScore';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * User identifier
         */
        protected int $userId,

        /**
         * New score, must be non-negative
         */
        protected int $score,

        /**
         * Pass True, if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
         */
        protected bool|null $force = null,

        /**
         * Pass True, if the game message should not be automatically edited to include the current scoreboard
         */
        protected bool|null $disableEditMessage = null,

        /**
         * Required if inline_message_id is not specified. Unique identifier for the target chat
         */
        protected int|null $chatId = null,

        /**
         * Required if inline_message_id is not specified. Identifier of the sent message
         */
        protected int|null $messageId = null,

        /**
         * Required if chat_id and message_id are not specified. Identifier of the inline message
         */
        protected string|null $inlineMessageId = null,
    ) {
    }
}
