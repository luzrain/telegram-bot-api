<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Inline\InlineQueryResult;
use Luzrain\TelegramBotApi\Type\Inline\SentWebAppMessage;

/**
 * Use this method to set the result of an interaction with a Web App and send a corresponding message on behalf of the
 * user to the chat from which the query originated.
 * On success, a SentWebAppMessage object is returned.
 *
 * @extends Method<SentWebAppMessage>
 */
final class AnswerWebAppQuery extends Method
{
    protected static string $methodName = 'answerWebAppQuery';
    protected static string $responseClass = SentWebAppMessage::class;

    public function __construct(
        /**
         * Unique identifier for the query to be answered
         */
        protected string $webAppQueryId,

        /**
         * A JSON-serialized object describing the message to be sent
         */
        protected InlineQueryResult $result,
    ) {
    }
}
