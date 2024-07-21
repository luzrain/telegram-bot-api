<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes paid media. Currently, it can be one of
 *
 * @see PaidMediaPreview
 * @see PaidMediaPhoto
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
        /** @var self $instance */
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            PaidMediaPreview::TYPE => PaidMediaPreview::fromArray($data),
            PaidMediaPhoto::TYPE => PaidMediaPhoto::fromArray($data),
            PaidMediaVideo::TYPE => PaidMediaVideo::fromArray($data),
        };
    }
}
