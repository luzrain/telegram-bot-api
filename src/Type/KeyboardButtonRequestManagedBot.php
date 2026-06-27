<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object defines the parameters for the creation of a managed bot.
 * Information about the created bot will be shared with the bot using the update managed_bot and a Message with the field managed_bot_created.
 */
final readonly class KeyboardButtonRequestManagedBot extends Type
{
    public function __construct(
        /**
         * Signed 32-bit identifier of the request. Must be unique within the message.
         */
        public int $requestId,

        /**
         * Optional. Suggested name for the bot
         */
        public string|null $suggestedName = null,

        /**
         * Optional. Suggested username for the bot
         */
        public string|null $suggestedUsername = null,
    ) {
    }
}
