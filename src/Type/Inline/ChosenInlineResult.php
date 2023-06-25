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
    protected function __construct(
        /**
         * The unique identifier for the result that was chosen
         */
        public string $resultId,

        /**
         * The user that chose the result
         */
        public User $from,

        /**
         * The query that was used to obtain the result
         */
        public string $query,

        /**
         * Optional. Sender location, only for bots that require user location
         */
        public Location|null $location = null,

        /**
         * Optional. Identifier of the sent inline message.
         * Available only if there is an inline keyboard attached to the message.
         * Will be also received in callback queries and can be used to edit the message.
         */
        public string|null $inlineMessageId = null,
    ) {
    }
}
