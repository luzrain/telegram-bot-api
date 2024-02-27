<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
final readonly class PassportElementErrorUnspecified extends PassportElementError
{
    public const SOURCE = 'unspecified';

    public function __construct(
        /**
         * Type of element of the user's Telegram Passport which has the issue
         */
        public string $type,

        /**
         * Base64-encoded element hash
         */
        public string $elementHash,

        /**
         * Error message
         */
        public string $message,
    ) {
        parent::__construct(self::SOURCE);
    }
}
