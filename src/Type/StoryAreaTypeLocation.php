<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes a regular gift owned by a user or a chat.
 */
final readonly class StoryAreaTypeLocation extends StoryAreaType
{
    public const TYPE = 'location';

    protected function __construct(
        /**
         * Location latitude in degrees
         */
        public float $latitude,

        /**
         * Location longitude in degrees
         */
        public float $longitude,

        /**
         * Optional. Address of the location
         */
        public LocationAddress|null $address = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
