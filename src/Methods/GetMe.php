<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\Types\User;

/**
 * A simple method for testing your bot's authentication token. Requires no parameters.
 * Returns basic information about the bot in form of a User object.
 */
class GetMe extends BaseMethod
{
    protected const METHOD_NAME = 'getMe';

    public function __construct()
    {
    }

    public function createResponse(array $data): BaseType
    {
        return User::fromResponse($data);
    }
}
