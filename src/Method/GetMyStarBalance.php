<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\StarAmount;

/**
 * A method to get the current Telegram Stars balance of the bot. Requires no parameters.
 * On success, returns a StarAmount object.
 *
 * @extends Method<StarAmount>
 */
final class GetMyStarBalance extends Method
{
    protected static string $methodName = 'getMyStarBalance';
    protected static string $responseClass = StarAmount::class;

    public function __construct()
    {
    }
}
