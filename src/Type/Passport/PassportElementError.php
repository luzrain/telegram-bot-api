<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\BaseType;

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
abstract class PassportElementError extends BaseType
{
    protected function __construct()
    {
        parent::__construct();
    }
}