<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method to change the bot's name.
 * Returns True on success.
 */
final class SetMyName extends BaseMethod
{
    protected static string $methodName = 'setMyName';

    public function __construct(

        /**
         * New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
         */
        protected string|null $name = null,

        /**
         * A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
         */
        protected string|null $languageCode = null,
    ) {
    }
}
