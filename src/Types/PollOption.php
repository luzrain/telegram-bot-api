<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object contains information about one answer option in a poll.
 */
class PollOption extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'text',
        'voter_count',
    ];

    protected static array $map = [
        'text' => true,
        'voter_count' => true,
    ];

    /**
     * Option text, 1-100 characters
     */
    protected string $text;

    /**
     * Number of users that voted for this option
     */
    protected int $voterCount;

    public function getText(): string
    {
        return $this->text;
    }

    public function getVoterCount(): int
    {
        return $this->voterCount;
    }
}
