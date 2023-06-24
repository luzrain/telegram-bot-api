<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\User;

/**
 * A simple method for testing your bot's authentication token. Requires no parameters.
 * Returns basic information about the bot in form of a User object.
 *
 * @extends BaseMethod<User>
 */
final class GetMe extends BaseMethod
{
    protected static string $methodName = 'getMe';
    protected static string $responseClass = User::class;

    public function __construct()
    {
    }
}
