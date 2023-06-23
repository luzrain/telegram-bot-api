<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Types\Inline\InlineQueryResult;

/**
 * Use this method to set the result of an interaction with a Web App and send a corresponding message on behalf of the
 * user to the chat from which the query originated. On success, a SentWebAppMessage object is returned.
 */
final class AnswerWebAppQuery extends BaseMethod
{
    protected static string $methodName = 'answerWebAppQuery';

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
