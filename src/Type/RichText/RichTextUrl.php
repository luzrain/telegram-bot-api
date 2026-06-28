<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A text with a link.
 */
final readonly class RichTextUrl extends RichText
{
    public const TYPE = 'url';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * URL of the link
         */
        public string $url,
    ) {
        parent::__construct(self::TYPE);
    }
}
