<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes paid media. Currently, it can be one of
 *
 * @see PaidMediaLivePhoto
 * @see PaidMediaPhoto
 * @see PaidMediaPreview
 * @see PaidMediaVideo
 */
readonly class PaidMedia extends Type
{
    protected function __construct(
        /**
         * Type of the paid media
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
            PaidMediaLivePhoto::TYPE => PaidMediaLivePhoto::fromArray($data),
            PaidMediaPhoto::TYPE => PaidMediaPhoto::fromArray($data),
            PaidMediaPreview::TYPE => PaidMediaPreview::fromArray($data),
            PaidMediaVideo::TYPE => PaidMediaVideo::fromArray($data),
        };
    }
}
