<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Payments\StarTransactions;

/**
 * Returns the bot's Telegram Star transactions in chronological order. On success, returns a StarTransactions object.
 *
 * @extends Method<StarTransactions>
 */
final class GetStarTransactions extends Method
{
    protected static string $methodName = 'getStarTransactions';
    protected static string $responseClass = StarTransactions::class;

    public function __construct(
        /**
         * Number of transactions to skip in the response
         */
        protected int|null $offset = null,

        /**
         * The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
         */
        protected int|null $limit = null,
    ) {
    }
}
