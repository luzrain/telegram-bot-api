<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\BaseType;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
final readonly class PassportElementErrorUnspecified extends BaseType implements PassportElementError
{
    /**
     * Error source, must be unspecified
     */
    public string $source;

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
        $this->source = 'unspecified';
    }
}
