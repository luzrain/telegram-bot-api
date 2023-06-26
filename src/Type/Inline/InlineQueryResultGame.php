<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a Game.
 */
final readonly class InlineQueryResultGame extends BaseType implements InlineQueryResult
{
    /**
     * Type of the result, must be game
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * Short name of the game
         */
        public string $gameShortName,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
        $this->type = 'game';
    }
}
