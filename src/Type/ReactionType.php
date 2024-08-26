<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the type of a reaction. Currently, it can be one of
 *
 * @see ReactionTypeEmoji
 * @see ReactionTypeCustomEmoji
 * @see ReactionTypePaid
 */
readonly class ReactionType extends Type
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
            ReactionTypeEmoji::TYPE => ReactionTypeEmoji::fromArray($data),
            ReactionTypeCustomEmoji::TYPE => ReactionTypeCustomEmoji::fromArray($data),
            ReactionTypePaid::TYPE => ReactionTypePaid::fromArray($data),
        };
    }
}
