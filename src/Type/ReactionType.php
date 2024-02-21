<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object describes the type of a reaction. Currently, it can be one of
 *
 * @see ReactionTypeEmoji
 * @see ReactionTypeCustomEmoji
 */
readonly class ReactionType extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Type of the reaction
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
            'emoji' => ReactionTypeEmoji::fromArray($data),
            'custom_emoji' => ReactionTypeCustomEmoji::fromArray($data),
        };
    }
}
