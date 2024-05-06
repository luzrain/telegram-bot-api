<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the way a background is filled based on the selected colors. Currently, it can be one of
 *
 * @see BackgroundFillSolid
 * @see BackgroundFillGradient
 * @see BackgroundFillFreeformGradient
 */
readonly class BackgroundFill extends Type
{
    protected function __construct(
        /**
         * Type of the background
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
        /** @var self $instance */
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            BackgroundFillSolid::TYPE => BackgroundFillSolid::fromArray($data),
            BackgroundFillGradient::TYPE => BackgroundFillGradient::fromArray($data),
            BackgroundFillFreeformGradient::TYPE => BackgroundFillFreeformGradient::fromArray($data),
        };
    }
}
