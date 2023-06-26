<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfBotCommandType;
use Luzrain\TelegramBotApi\Type\BotCommand;
use Luzrain\TelegramBotApi\Type\BotCommandScope;

/**
 * Use this method to get the current list of the bot's commands for the given scope and user language.
 * Returns Array of BotCommand on success. If commands aren't set, an empty list is returned.
 *
 * @extends Method<list<BotCommand>>
 */
final class GetMyCommands extends Method
{
    protected static string $methodName = 'getMyCommands';
    protected static string $responseClass = ArrayOfBotCommandType::class;

    public function __construct(
        /**
         * A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
         */
        protected BotCommandScope|null $scope = null,

        /**
         * A two-letter ISO 639-1 language code or an empty string
         */
        protected string|null $languageCode = null,
    ) {
    }
}
