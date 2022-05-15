<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Location;
use TelegramBot\Api\Types\User;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 */
class ChosenInlineResult extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'result_id',
        'from',
        'query',
    ];

    protected static array $map = [
        'result_id' => true,
        'from' => User::class,
        'location' => Location::class,
        'inline_message_id' => true,
        'query' => true,
    ];

    /**
     * The unique identifier for the result that was chosen
     */
    protected string $resultId;

    /**
     * The user that chose the result
     */
    protected User $from;

    /**
     * Optional. Sender location, only for bots that require user location
     */
    protected ?Location $location = null;

    /**
     * Optional. Identifier of the sent inline message.
     * Available only if there is an inline keyboard attached to the message.
     * Will be also received in callback queries and can be used to edit the message.
     */
    protected ?string $inlineMessageId = null;

    /**
     * The query that was used to obtain the result
     */
    protected string $query;

    public function getResultId(): string
    {
        return $this->resultId;
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
