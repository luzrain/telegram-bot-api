<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
 */
final readonly class StoryAreaTypeUniqueGift extends StoryAreaType
{
    public const TYPE = 'unique_gift';

    protected function __construct(
        /**
         * Unique name of the gift
         */
        public string $name,
    ) {
        parent::__construct(self::TYPE);
    }
}
