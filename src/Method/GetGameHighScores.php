<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfGameHighScore;

/**
 * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game.
 * On success, returns an Array of GameHighScore objects.
 */
final class GetGameHighScores extends BaseMethod
{
    protected static string $methodName = 'getGameHighScores';
    protected static string $responseClass = ArrayOfGameHighScore::class;

    public function __construct(

        /**
         * User identifier
         */
        protected int $userId,

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
