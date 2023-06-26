<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 */
final readonly class SentWebAppMessage extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
         */
        public string|null $inlineMessageId = null,
    ) {
    }
}
