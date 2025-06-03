<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes the type of a clickable area on a story. Currently, it can be one of
 *
 * @see StoryAreaTypeLocation
 * @see StoryAreaTypeSuggestedReaction
 * @see StoryAreaTypeLink
 * @see StoryAreaTypeWeather
 * @see StoryAreaTypeUniqueGift
 */
readonly class StoryAreaType extends Type
{
    protected function __construct(
        /**
         * Type of the area
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
            StoryAreaTypeLocation::TYPE => StoryAreaTypeLocation::fromArray($data),
            StoryAreaTypeSuggestedReaction::TYPE => StoryAreaTypeSuggestedReaction::fromArray($data),
            StoryAreaTypeLink::TYPE => StoryAreaTypeLink::fromArray($data),
            StoryAreaTypeWeather::TYPE => StoryAreaTypeWeather::fromArray($data),
            StoryAreaTypeUniqueGift::TYPE => StoryAreaTypeUniqueGift::fromArray($data),
        };
    }
}
