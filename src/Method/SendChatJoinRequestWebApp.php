<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to process a received chat join request query by showing a Mini App to the user before deciding the outcome.
 * Call answerChatJoinRequestQuery to resolve the join request query based on the user interaction with the Mini App.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SendChatJoinRequestWebApp extends Method
{
    protected static string $methodName = 'sendChatJoinRequestWebApp';

    public function __construct(
        /**
         * Unique identifier of the join request query
         */
        protected string $chatJoinRequestQueryId,

        /**
         * The URL of the Mini App to be opened
         */
        protected string $webAppUrl,
    ) {
    }
}
