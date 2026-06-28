<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * Cell in a table.
 */
final readonly class RichBlockTableCell extends Type
{
    protected function __construct(
        /**
         * Horizontal cell content alignment. Currently, must be one of "left", "center", or "right".
         */
        public string $align,

        /**
         * Vertical cell content alignment. Currently, must be one of "top", "middle", or "bottom".
         */
        public string $valign,

        /**
         * Optional. Text in the cell. If omitted, then the cell is invisible.
         *
         * @var RichText|string|list<RichText|string|array>|null
         */
        #[RichTextType]
        public RichText|string|array|null $text = null,

        /**
         * Optional. True, if the cell is a header cell
         */
        public true|null $isHeader = null,

        /**
         * Optional. The number of columns the cell spans if it is bigger than 1
         */
        public int|null $colspan = null,

        /**
         * Optional. The number of rows the cell spans if it is bigger than 1
         */
        public int|null $rowspan = null,
    ) {
    }
}
