<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 */
final readonly class RichBlockDetails extends RichBlock
{
    public const TYPE = 'details';

    public function __construct(
        /**
         * Always shown summary of the block
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $summary,

        /**
         * Content of the block
         *
         * @var list<RichBlock>
         */
        #[ArrayType(RichBlock::class)]
        public array $blocks,

        /**
         * Optional. True, if the content of the block is visible by default
         */
        public true|null $isOpen = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
