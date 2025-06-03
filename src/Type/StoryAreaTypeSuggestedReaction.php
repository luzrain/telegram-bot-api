<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes a regular gift owned by a user or a chat.
 */
final readonly class StoryAreaTypeSuggestedReaction extends StoryAreaType
{
    public const TYPE = 'suggested_reaction';

    protected function __construct(
        /**
         * Type of the reaction
         */
        public ReactionType $reactionType,

        /**
         * Optional. Pass True if the reaction area has a dark background
         */
        public bool|null $isDark = null,

        /**
         * Optional. Pass True if reaction area corner is flipped
         */
        public bool|null $isFlipped = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
