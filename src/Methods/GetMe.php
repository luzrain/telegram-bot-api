<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\User;

/**
 * A simple method for testing your bot's authentication token. Requires no parameters.
 * Returns basic information about the bot in form of a User object.
 */
final class GetMe extends BaseMethod
{
    protected static string $methodName = 'getMe';

    protected static string $responseClass = User::class;
}
