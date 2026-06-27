<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Inline\InlineQueryResult;
use Luzrain\TelegramBotApi\Type\Inline\SentGuestMessage;

/**
 * Use this method to reply to a received guest message. On success, a SentGuestMessage object is returned.
 *
 * @extends Method<SentGuestMessage>
 */
final class AnswerGuestQuery extends Method
{
    protected static string $methodName = 'answerGuestQuery';
    protected static string $responseClass = SentGuestMessage::class;

    public function __construct(
        /**
         * Unique identifier for the query to be answered
         */
        protected string $guestQueryId,

        /**
         * A JSON-serialized object describing the message to be sent
         */
        protected InlineQueryResult $result,
    ) {
    }
}
