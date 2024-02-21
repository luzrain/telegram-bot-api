<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * Represents a reaction added to a message along with the number of times it was added.
 */
final readonly class ReactionCount extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Type of the reaction
         */
        public ReactionType $type,

        /**
         * Number of times the reaction was added
         */
        public int $totalCount,
    ) {
    }
}
