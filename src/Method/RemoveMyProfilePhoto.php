<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Removes the profile photo of the bot. Requires no parameters. Returns True on success.
 *
 * @extends Method<true>
 */
final class RemoveMyProfilePhoto extends Method
{
    protected static string $methodName = 'removeMyProfilePhoto';

    public function __construct()
    {
    }
}
