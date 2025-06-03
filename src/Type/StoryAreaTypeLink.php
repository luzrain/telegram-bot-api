<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 */
final readonly class StoryAreaTypeLink extends StoryAreaType
{
    public const TYPE = 'link';

    protected function __construct(
        /**
         * HTTP or tg:// URL to be opened when the area is clicked
         */
        public string $url,
    ) {
        parent::__construct(self::TYPE);
    }
}
