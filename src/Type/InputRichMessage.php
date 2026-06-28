<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a rich message to be sent. Exactly one of the fields html or markdown must be used.
 */
final readonly class InputRichMessage extends Type
{
    public function __construct(
        /**
         * Optional. Content of the rich message to send described using HTML formatting. See rich message formatting options for more details.
         */
        public string|null $html = null,

        /**
         * Optional. Content of the rich message to send described using Markdown formatting. See rich message formatting options for more details.
         */
        public string|null $markdown = null,

        /**
         * Optional. Pass True if the rich message must be shown right-to-left
         */
        public bool|null $isRtl = null,

        /**
         * Optional. Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
         */
        public bool|null $skipEntityDetection = null,
    ) {
    }
}
