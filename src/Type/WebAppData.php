<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Contains data sent from a Web App to the bot.
 */
final class WebAppData extends BaseType implements TypeInterface
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
