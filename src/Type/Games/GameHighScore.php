<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Games;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\User;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents one row of the high scores table for a game.
 */
final class GameHighScore extends BaseType implements TypeInterface
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
