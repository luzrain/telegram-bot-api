<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a Game.
 */
final readonly class InlineQueryResultGame extends InlineQueryResult
{
    public const TYPE = 'game';

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
        parent::__construct(self::TYPE);
    }
}
