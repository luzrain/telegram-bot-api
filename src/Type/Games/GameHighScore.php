<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Games;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\User;

/**
 * This object represents one row of the high scores table for a game.
 */
final readonly class GameHighScore extends Type
{
    protected function __construct(
        /**
         * Position in high score table for the game
         */
        public int $position,

        /**
         * User
         */
        public User $user,

        /**
         * Score
         */
        public int $score,
    ) {
    }
}
