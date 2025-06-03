<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the content of a story to post. Currently, it can be one of
 *
 * @see InputStoryContentPhoto
 * @see InputStoryContentVideo
 */
readonly class InputStoryContent extends Type
{
    protected function __construct(
        /**
         * Type of the content
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
            InputStoryContentPhoto::TYPE => InputStoryContentPhoto::fromArray($data),
            InputStoryContentVideo::TYPE => InputStoryContentVideo::fromArray($data),
        };
    }
}
