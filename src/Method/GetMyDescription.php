<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\BotDescription;

/**
 * Use this method to get the current bot description for the given user language.
 * Returns BotDescription on success.
 *
 * @extends Method<BotDescription>
 */
final class GetMyDescription extends Method
{
    protected static string $methodName = 'getMyDescription';
    protected static string $responseClass = BotDescription::class;

    public function __construct(
        /**
         * A two-letter ISO 639-1 language code or an empty string
         */
        protected string|null $languageCode = null,
    ) {
    }
}
