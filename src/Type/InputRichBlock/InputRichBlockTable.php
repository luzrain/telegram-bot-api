<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\InputRichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayOfArayType;
use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichBlock\RichBlockTableCell;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * A table, corresponding to the HTML tag <table>.
 */
final readonly class InputRichBlockTable extends InputRichBlock
{
    public const TYPE = 'table';

    public function __construct(
        /**
         * Cells of the table
         *
         * @var list<list<RichBlockTableCell>>
         */
        #[ArrayOfArayType(RichBlockTableCell::class)]
        public array $cells,

        /**
         * Optional. Pass True if the table has borders
         */
        public true|null $isBordered = null,

        /**
         * Optional. Pass True if the table is striped
         */
        public true|null $isStriped = null,

        /**
         * Optional. Caption of the table
         *
         * @var RichText|string|list<RichText|string|array>|null
         */
        #[RichTextType]
        public RichText|string|array|null $caption = null,

        /**
         * Optional. Pass True if table cells must have smaller indents
         */
        public true|null $isCompact = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
