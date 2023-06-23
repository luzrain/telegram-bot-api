<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\BotDescription;
use TelegramBot\Api\Types\ForceReply;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\MessageId;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;

/**
 * Use this method to change the bot's short description, which is shown on the bot's profile page
 * and is sent together with the link when users share the bot.
 * Returns True on success.
 */
final class SetMyShortDescription extends BaseMethod
{
    protected static string $methodName = 'setMyShortDescription';

    public function __construct(

        /**
         * New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
         */
        protected string|null $shortDescription = null,

        /**
         * A two-letter ISO 639-1 language code.
         * If empty, the short description will be applied to all users for whose language there is no dedicated short description.
         */
        protected string|null $languageCode = null,
    ) {
    }
}
