<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\BusinessConnection;

/**
 * Use this method to get information about the connection of the bot with a business account.
 * Returns a BusinessConnection object on success.
 *
 * @extends Method<BusinessConnection>
 */
final class GetBusinessConnection extends Method
{
    protected static string $methodName = 'getBusinessConnection';
    protected static string $responseClass = BusinessConnection::class;

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,
    ) {
    }
}
