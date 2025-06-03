<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes a gift received and owned by a user or a chat. Currently, it can be one of
 *
 * @see OwnedGiftRegular
 * @see OwnedGiftUnique
 */
readonly class OwnedGift extends Type
{
    protected function __construct(
        /**
         * Type of the gift
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
            OwnedGiftRegular::TYPE => OwnedGiftRegular::fromArray($data),
            OwnedGiftUnique::TYPE => OwnedGiftUnique::fromArray($data),
        };
    }
}
