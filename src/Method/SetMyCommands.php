<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\BotCommand;
use Luzrain\TelegramBotApi\Type\BotCommandScope;

/**
 * Use this method to change the list of the bot's commands.
 * See this manual for more details about bot commands.
 * Returns True on success.
 *
 * @see https://core.telegram.org/bots/features#commands
 * @extends Method<true>
 */
final class SetMyCommands extends Method
{
    protected static string $methodName = 'setMyCommands';

    public function __construct(
        /**
         * A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
         *
         * @var list<BotCommand>
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
