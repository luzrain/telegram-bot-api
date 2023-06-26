<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * Contains data sent from a Web App to the bot.
 */
final readonly class WebAppData extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * The data. Be aware that a bad client can send arbitrary data in this field.
         */
        public string $data,

        /**
         * Text of the web_app keyboard button, from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
         */
        public string $buttonText,
    ) {
    }
}
