<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding
 * the bot to the attachment menuor launching a Web App from a link.
 */
final readonly class WriteAccessAllowed extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Optional. Name of the Web App which was launched from a link
         */
        public string|null $webAppName = null,
    ) {
    }
}
