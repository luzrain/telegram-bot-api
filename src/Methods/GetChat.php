<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\Chat;

/**
 * Use this method to get up to date information about the chat (current name of the user for one-on-one conversations,
 * current username of a user, group or channel, etc.).
 * Returns a Chat object on success.
 */
final class GetChat extends BaseMethod
{
    protected static string $methodName = 'getChat';
    protected static string $responseClass = Chat::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
