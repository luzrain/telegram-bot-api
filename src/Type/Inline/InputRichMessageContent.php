<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\InputRichMessage;

/**
 * Represents the content of a rich message to be sent as the result of an inline query.
 */
final readonly class InputRichMessageContent extends Type implements InputMessageContent
{
    public function __construct(
        /**
         * The message to be sent
         */
        public InputRichMessage $richMessage,
    ) {
    }
}
