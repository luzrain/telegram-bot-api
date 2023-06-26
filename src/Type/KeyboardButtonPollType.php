<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 */
final readonly class KeyboardButtonPollType extends Type
{
    public function __construct(
        /**
         * Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode.
         * If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
         */
        public string|null $type = null,
    ) {
    }
}
