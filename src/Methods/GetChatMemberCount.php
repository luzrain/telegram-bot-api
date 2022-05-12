<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method to get the number of members in a chat. Returns Int on success.
 */
final class GetChatMemberCount extends BaseMethod
{
    protected static string $methodName = 'getChatMemberCount';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
