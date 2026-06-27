<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\BotAccessSettings;

/**
 * Use this method to get the access settings of a managed bot. Returns a BotAccessSettings object on success.
 *
 * @extends Method<BotAccessSettings>
 */
final class GetManagedBotAccessSettings extends Method
{
    protected static string $methodName = 'getManagedBotAccessSettings';
    protected static string $responseClass = BotAccessSettings::class;

    public function __construct(
        /**
         * User identifier of the managed bot whose access settings will be returned
         */
        protected int $userId,
    ) {
    }
}
