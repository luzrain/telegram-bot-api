<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to process a received chat join request query. Returns True on success.
 *
 * @extends Method<true>
 */
final class AnswerChatJoinRequestQuery extends Method
{
    protected static string $methodName = 'answerChatJoinRequestQuery';

    public function __construct(
        /**
         * Unique identifier of the join request query
         */
        protected string $chatJoinRequestQueryId,

        /**
         * Result of the query. Must be either "approve" to allow the user to join the chat, "decline" to
         * disallow the user to join the chat, or "queue" to leave the decision to other administrators.
         */
        protected string $result,
    ) {
    }
}
