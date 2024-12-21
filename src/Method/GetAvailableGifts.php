<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Stickers\Gifts;

/**
 * Returns the list of gifts that can be sent by the bot to users. Requires no parameters.
 * Returns a Gifts object.
 *
 * @extends Method<Gifts>
 */
final class GetAvailableGifts extends Method
{
    protected static string $methodName = 'getAvailableGifts';
    protected static string $responseClass = Gifts::class;

    public function __construct()
    {
    }
}
