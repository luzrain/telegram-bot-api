<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * An item of a list.
 */
final readonly class RichBlockListItem extends Type
{
    protected function __construct(
        /**
         * Label of the item
         */
        public string $label,

        /**
         * The content of the item
         *
         * @var list<RichBlock>
         */
        #[ArrayType(RichBlock::class)]
        public array $blocks,

        /**
         * Optional. True, if the item has a checkbox
         */
        public true|null $hasCheckbox = null,

        /**
         * Optional. True, if the item has a checked checkbox
         */
        public true|null $isChecked = null,

        /**
         * Optional. For ordered lists, the numeric value of the item label
         */
        public int|null $value = null,

        /**
         * Optional. For ordered lists, the type of the item label; must be one of "a" for lowercase letters, "A" for uppercase letters,
         * "i" for lowercase Roman numerals, "I" for uppercase Roman numerals, or "1" for decimal numbers
         */
        public string|null $type = null,
    ) {
    }
}
