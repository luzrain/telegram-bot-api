<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 */
final readonly class StoryAreaTypeWeather extends StoryAreaType
{
    public const TYPE = 'weather';

    protected function __construct(
        /**
         * Temperature, in degree Celsius
         */
        public float $temperature,

        /**
         * Emoji representing the weather
         */
        public string $emoji,

        /**
         * A color of the area background in the ARGB format
         */
        public int $backgroundColor,
    ) {
        parent::__construct(self::TYPE);
    }
}
