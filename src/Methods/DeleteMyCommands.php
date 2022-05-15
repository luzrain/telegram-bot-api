<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\BotCommandScope;

/**
 * Use this method to delete the list of the bot's commands for the given scope and user language.
 * After deletion, higher level commands will be shown to affected users. Returns True on success.
 */
final class DeleteMyCommands extends BaseMethod
{
    protected static string $methodName = 'deleteMyCommands';

    public function __construct(

        /**
         * A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
         */
        protected BotCommandScope|null $scope = null,

        /**
         * A two-letter ISO 639-1 language code.
         * If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
         */
        protected string|null $languageCode = null,
    ) {
    }
}
