<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\InputRichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 */
final readonly class InputRichBlockDetails extends InputRichBlock
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
         * @var list<InputRichBlock>
         */
        #[ArrayType(InputRichBlock::class)]
        public array $blocks,

        /**
         * Optional. Pass True if the content of the block is visible by default
         */
        public true|null $isOpen = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
