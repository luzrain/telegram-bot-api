<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 */
final class LeaveChat extends BaseMethod
{
    protected static string $methodName = 'leaveChat';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}