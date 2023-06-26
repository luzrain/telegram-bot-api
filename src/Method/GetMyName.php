<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\BotName;

/**
 * Use this method to get the current bot name for the given user language.
 * Returns BotName on success.
 *
 * @extends Method<BotName>
 */
final class GetMyName extends Method
{
    protected static string $methodName = 'getMyName';
    protected static string $responseClass = BotName::class;

    public function __construct(
        /**
         * A two-letter ISO 639-1 language code or an empty string
         */
        protected string|null $languageCode = null,
    ) {
    }
}
