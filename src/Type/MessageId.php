<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a unique message identifier.
 */
final readonly class MessageId extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Unique message identifier
         */
        public int $messageId,
    ) {
    }
}
