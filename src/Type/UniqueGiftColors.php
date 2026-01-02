<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 */
final readonly class UniqueGiftColors extends Type
{
    public function __construct(
        /**
         * Custom emoji identifier of the unique gift's model
         */
        public string $modelCustomEmojiId,

        /**
         * Custom emoji identifier of the unique gift's symbol
         */
        public string $symbolCustomEmojiId,

        /**
         * Main color used in light themes; RGB format
         */
        public int $lightThemeMainColor,

        /**
         * List of 1-3 additional colors used in light themes; RGB format
         * @var list<int>
         */
        public array $lightThemeOtherColors,

        /**
         * Main color used in dark themes; RGB format
         */
        public int $darkThemeMainColor,

        /**
         * List of 1-3 additional colors used in dark themes; RGB format
         * @var list<int>
         */
        public array $darkThemeOtherColors,
    ) {
    }
}
