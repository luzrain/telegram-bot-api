<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\Poll;

/**
 * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
 *
 * @extends BaseMethod<Poll>
 */
final class StopPoll extends BaseMethod
{
    protected static string $methodName = 'stopPoll';
    protected static string $responseClass = Poll::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Identifier of the original message with the poll
         */
        protected int $messageId,

        /**
         * A JSON-serialized object for a new message inline keyboard.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
