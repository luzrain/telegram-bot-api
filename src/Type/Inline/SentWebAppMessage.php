<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 */
final class SentWebAppMessage extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
         */
        public string|null $inlineMessageId = null,
    ) {
    }
}
