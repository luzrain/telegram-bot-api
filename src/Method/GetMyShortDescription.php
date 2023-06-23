<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\BotShortDescription;

/**
 * Use this method to get the current bot short description for the given user language.
 * Returns BotShortDescription on success.
 */
final class GetMyShortDescription extends BaseMethod
{
    protected static string $methodName = 'getMyShortDescription';
    protected static string $responseClass = BotShortDescription::class;

    public function __construct(

        /**
         * A two-letter ISO 639-1 language code or an empty string
         */
        protected string|null $languageCode = null,
    ) {
    }
}
