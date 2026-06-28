<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A link to an anchor.
 */
final readonly class RichTextAnchorLink extends RichText
{
    public const TYPE = 'anchor_link';

    public function __construct(
        /**
         * The link text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The name of the anchor. If the name is empty, then the link brings back to the top of the message.
         */
        public string $anchorName,
    ) {
        parent::__construct(self::TYPE);
    }
}
