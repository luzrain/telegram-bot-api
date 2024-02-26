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

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        /** @var self $instance */
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->source) {
            PassportElementErrorDataField::SOURCE => PassportElementErrorDataField::fromArray($data),
            PassportElementErrorFrontSide::SOURCE => PassportElementErrorFrontSide::fromArray($data),
            PassportElementErrorReverseSide::SOURCE => PassportElementErrorReverseSide::fromArray($data),
            PassportElementErrorSelfie::SOURCE => PassportElementErrorSelfie::fromArray($data),
            PassportElementErrorFile::SOURCE => PassportElementErrorFile::fromArray($data),
            PassportElementErrorFiles::SOURCE => PassportElementErrorFiles::fromArray($data),
            PassportElementErrorTranslationFile::SOURCE => PassportElementErrorTranslationFile::fromArray($data),
            PassportElementErrorTranslationFiles::SOURCE => PassportElementErrorTranslationFiles::fromArray($data),
            PassportElementErrorUnspecified::SOURCE => PassportElementErrorUnspecified::fromArray($data),
        };
    }
}
