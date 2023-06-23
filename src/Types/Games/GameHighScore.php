<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Games;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;
use Luzrain\TelegramBotApi\Types\User;

/**
 * This object represents one row of the high scores table for a game.
 */
class GameHighScore extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'position',
        'user',
        'score',
    ];

    protected static array $map = [
        'position' => true,
        'user' => User::class,
        'score' => true,
    ];

    /**
     * Position in high score table for the game
     */
    protected int $position;

    /**
     * User
     */
    protected User $user;

    /**
     * Score
     */
    protected int $score;

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getScore(): int
    {
        return $this->score;
    }
}
