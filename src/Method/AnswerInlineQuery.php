<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\Inline\InlineQueryResult;
use Luzrain\TelegramBotApi\Type\InlineQueryResultsButton;

/**
 * Use this method to send answers to an inline query. On success, True is returned.
 * No more than 50 results per query are allowed.
 *
 * @extends BaseMethod<true>
 */
final class AnswerInlineQuery extends BaseMethod
{
    protected static string $methodName = 'answerInlineQuery';

    public function __construct(
        /**
         * Unique identifier for the answered query
         */
        protected string $inlineQueryId,

        /**
         * A JSON-serialized array of results for the inline query
         *
         * @var InlineQueryResult[]
         */
        protected array $results,

        /**
         * The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
         */
        protected int|null $cacheTime = null,

        /**
         * Pass True, if results may be cached on the server side only for the user that sent the query.
         * By default, results may be returned to any user who sends the same query
         */
        protected bool|null $isPersonal = null,

        /**
         * Pass the offset that a client should send in the next query with the same text to receive more results.
         * Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
         */
        protected string|null $nextOffset = null,

        /**
         * A JSON-serialized object describing a button to be shown above inline query results
         */
        protected InlineQueryResultsButton|null $button = null,
    ) {
    }
}
