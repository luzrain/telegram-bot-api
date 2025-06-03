<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes a profile photo to set. Currently, it can be one of
 *
 * @see InputProfilePhotoStatic
 * @see InputProfilePhotoAnimated
 */
readonly class InputProfilePhoto extends Type
{
    protected function __construct(
        /**
         * Type of the profile photo
         */
        public string $type,
    ) {
    }

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            InputProfilePhotoStatic::TYPE => InputProfilePhotoStatic::fromArray($data),
            InputProfilePhotoAnimated::TYPE => InputProfilePhotoAnimated::fromArray($data),
        };
    }
}
