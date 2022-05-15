<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\InputFile;

/**
 * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Returns True on success.
 */
final class SetChatPhoto extends BaseMethod
{
    protected static string $methodName = 'setChatPhoto';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * New chat photo, uploaded using multipart/form-data
         */
        protected InputFile $photo,
    ) {
    }
}
