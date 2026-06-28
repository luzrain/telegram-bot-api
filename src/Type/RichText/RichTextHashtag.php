<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A hashtag.
 */
final readonly class RichTextHashtag extends RichText
{
    public const TYPE = 'hashtag';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The hashtag
         */
        public string $hashtag,
    ) {
        parent::__construct(self::TYPE);
    }
}
