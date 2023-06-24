<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\Location;
use Luzrain\TelegramBotApi\Type\User;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 */
final class ChosenInlineResult extends BaseType implements TypeInterface
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
    protected Location|null $location = null;

    /**
     * Optional. Identifier of the sent inline message.
     * Available only if there is an inline keyboard attached to the message.
     * Will be also received in callback queries and can be used to edit the message.
     */
    protected string|null $inlineMessageId = null;

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

    public function getLocation(): Location|null
    {
        return $this->location;
    }

    public function getInlineMessageId(): string|null
    {
        return $this->inlineMessageId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
