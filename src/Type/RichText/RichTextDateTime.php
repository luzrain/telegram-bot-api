<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * Formatted date and time.
 */
final readonly class RichTextDateTime extends RichText
{
    public const TYPE = 'date_time';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The Unix time associated with the entity
         */
        public int $unixTime,

        /**
         * The string that defines the formatting of the date and time. See date-time entity formatting for more details.
         */
        public string $dateTimeFormat,
    ) {
        parent::__construct(self::TYPE);
    }
}
