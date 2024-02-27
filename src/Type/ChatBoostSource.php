<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the source of a chat boost. It can be one of
 *
 * @see ChatBoostSourcePremium
 * @see ChatBoostSourceGiftCode
 * @see ChatBoostSourceGiveaway
 */
readonly class ChatBoostSource extends Type
{
    protected function __construct(
        /**
         * Source of the boost
         */
        public string $source,
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

        return self::class !== static::class ? $instance : match ($instance->source) {
            ChatBoostSourcePremium::SOURCE => ChatBoostSourcePremium::fromArray($data),
            ChatBoostSourceGiftCode::SOURCE => ChatBoostSourceGiftCode::fromArray($data),
            ChatBoostSourceGiveaway::SOURCE => ChatBoostSourceGiveaway::fromArray($data),
        };
    }
}
