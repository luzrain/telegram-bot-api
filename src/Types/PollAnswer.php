<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer extends BaseType
{
    protected static array $requiredParams = [
        'poll_id',
        'user',
        'option_ids',
    ];

    protected static array $map = [
        'poll_id' => true,
        'user' => User::class,
        'option_ids' => true,
    ];

    /**
     * Unique poll identifier
     */
    protected string $pollId;

    /**
     * The user, who changed the answer to the poll
     */
    protected User $user;

    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     *
     * @var int[]
     */
    protected array $optionIds;

    public function getPollId(): string
    {
        return $this->pollId;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return int[]
     */
    public function getOptionIds(): array
    {
        return $this->optionIds;
    }
}
