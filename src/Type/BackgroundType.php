<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the type of a background. Currently, it can be one of
 *
 * @see BackgroundTypeFill
 * @see BackgroundTypeWallpaper
 * @see BackgroundTypePattern
 * @see BackgroundTypeChatTheme
 */
readonly class BackgroundType extends Type
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
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            BackgroundTypeFill::TYPE => BackgroundTypeFill::fromArray($data),
            BackgroundTypeWallpaper::TYPE => BackgroundTypeWallpaper::fromArray($data),
            BackgroundTypePattern::TYPE => BackgroundTypePattern::fromArray($data),
            BackgroundTypeChatTheme::TYPE => BackgroundTypeChatTheme::fromArray($data),
        };
    }
}
