<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\BotCommand;
use TelegramBot\Api\Types\BotCommandScope;

/**
 * Use this method to change the list of the bot's commands.
 * See https://core.telegram.org/bots#commands for more details about bot commands. Returns True on success.
 */
final class SetMyCommands extends BaseMethod
{
    protected static string $methodName = 'setMyCommands';

    public function __construct(

        /**
         * A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
         *
         * @var BotCommand[]
         */
        protected array $commands,

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
