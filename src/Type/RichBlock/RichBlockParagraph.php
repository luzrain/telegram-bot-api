<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * A text paragraph, corresponding to the HTML tag <p>.
 */
final readonly class RichBlockParagraph extends RichBlock
{
    public const TYPE = 'paragraph';

    public function __construct(
        /**
         * Text of the block
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,
    ) {
        parent::__construct(self::TYPE);
    }
}
