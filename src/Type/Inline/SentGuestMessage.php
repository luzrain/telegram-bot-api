<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes an inline message sent by a guest bot.
 */
final readonly class SentGuestMessage extends Type
{
    protected function __construct(
        /**
         * Identifier of the sent inline message
         */
        public string $inlineMessageId,
    ) {
    }
}
