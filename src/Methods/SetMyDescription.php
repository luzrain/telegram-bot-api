<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ForceReply;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\MessageId;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;

/**
 * Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty.
 * Returns True on success.
 */
final class SetMyDescription extends BaseMethod
{
    protected static string $methodName = 'setMyDescription';

    public function __construct(

        /**
         * New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
         */
        protected string|null $description = null,

        /**
         * A two-letter ISO 639-1 language code.
         * If empty, the description will be applied to all users for whose language there is no dedicated description.
         */
        protected string|null $languageCode = null,
    ) {
    }
}
