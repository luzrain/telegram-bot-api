<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 *
 * @see PassportElementErrorDataField
 * @see PassportElementErrorFrontSide
 * @see PassportElementErrorReverseSide
 * @see PassportElementErrorSelfie
 * @see PassportElementErrorFile
 * @see PassportElementErrorFiles
 * @see PassportElementErrorTranslationFile
 * @see PassportElementErrorTranslationFiles
 * @see PassportElementErrorUnspecified
 */
readonly class PassportElementError extends Type
{
    protected function __construct(
        /**
         * Error source
         */
        public string $source,
    ) {
    }
}
