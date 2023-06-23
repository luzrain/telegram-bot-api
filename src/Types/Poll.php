<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;
use Luzrain\TelegramBotApi\Types\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Types\Arrays\ArrayOfPollOption;

/**
 * This object contains information about a poll.
 */
class Poll extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'id',
        'question',
        'options',
        'total_voter_count',
        'is_closed',
        'is_anonymous',
        'type',
        'allows_multiple_answers',
    ];

    protected static array $map = [
        'id' => true,
        'question' => true,
        'options' => ArrayOfPollOption::class,
        'total_voter_count' => true,
        'is_closed' => true,
        'is_anonymous' => true,
        'type' => true,
        'allows_multiple_answers' => true,
        'correct_option_id' => true,
        'explanation' => true,
        'explanation_entities' => ArrayOfMessageEntity::class,
        'open_period' => true,
        'close_date' => true,
    ];

    /**
     * Unique poll identifier
     */
    protected string $id;

    /**
     * Poll question, 1-300 characters
     */
    protected string $question;

    /**
     * List of poll options
     *
     * @var PollOption[]
     */
    protected array $options;

    /**
     * Total number of users that voted in the poll
     */
    protected int $totalVoterCount;

    /**
     * True, if the poll is closed
     */
    protected bool $isClosed;

    /**
     * True, if the poll is anonymous
     */
    protected bool $isAnonymous;

    /**
     * Poll type, currently can be “regular” or “quiz”
     */
    protected string $type;

    /**
     * True, if the poll allows multiple answers
     */
    protected bool $allowsMultipleAnswers;

    /**
     * Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode,
     * which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     */
    protected ?int $correctOptionId = null;

    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     */
    protected ?string $explanation = null;

    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     *
     * @var MessageEntity[]
     */
    protected ?array $explanationEntities = null;

    /**
     * Optional. Amount of time in seconds the poll will be active after creation
     */
    protected ?int $openPeriod = null;

    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     */
    protected ?int $closeDate = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @return PollOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    public function isClosed(): bool
    {
        return $this->isClosed;
    }

    public function isAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function isAllowsMultipleAnswers(): bool
    {
        return $this->allowsMultipleAnswers;
    }

    public function getCorrectOptionId(): ?int
    {
        return $this->correctOptionId;
    }

    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * @return MessageEntity[]
     */
    public function getExplanationEntities(): ?array
    {
        return $this->explanationEntities;
    }

    public function getOpenPeriod(): ?int
    {
        return $this->openPeriod;
    }

    public function getCloseDate(): ?int
    {
        return $this->closeDate;
    }
}
