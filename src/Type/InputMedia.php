<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents the content of a media message to be sent. It should be one of
 *
 * @see InputMediaAnimation
 * @see InputMediaDocument
 * @see InputMediaAudio
 * @see InputMediaPhoto
 * @see InputMediaVideo
 */
readonly class InputMedia extends Type
{
    protected function __construct(
        /**
         * Type of the result
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
            InputMediaAnimation::TYPE => InputMediaAnimation::fromArray($data),
            InputMediaDocument::TYPE => InputMediaDocument::fromArray($data),
            InputMediaAudio::TYPE => InputMediaAudio::fromArray($data),
            InputMediaPhoto::TYPE => InputMediaPhoto::fromArray($data),
            InputMediaVideo::TYPE => InputMediaVideo::fromArray($data),
        };
    }
}
