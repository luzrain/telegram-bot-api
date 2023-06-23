<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Types\BotDescription;

/**
 * Use this method to get the current bot description for the given user language.
 * Returns BotDescription on success.
 */
final class GetMyDescription extends BaseMethod
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
