<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * A section heading, corresponding to the HTML tags <h1>, <h2>, <h3>, <h4>, <h5>, or <h6>.
 */
final readonly class RichBlockSectionHeading extends RichBlock
{
    public const TYPE = 'heading';

    public function __construct(
        /**
         * Text of the block
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest
         */
        public int $size,
    ) {
        parent::__construct(self::TYPE);
    }
}
