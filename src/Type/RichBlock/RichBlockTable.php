<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * A table, corresponding to the HTML tag <table>.
 */
final readonly class RichBlockTable extends RichBlock
{
    public const TYPE = 'table';

    public function __construct(
        /**
         * Cells of the table
         *
         * @var RichBlockTableCell
         */
        #[ArrayType(RichBlockTableCell::class, arrayOfArray: true)]
        public array $cells,

        /**
         * Optional. True, if the table has borders
         */
        public true|null $isBordered = null,

        /**
         * Optional. True, if the table is striped
         */
        public true|null $isStriped = null,

        /**
         * Optional. Caption of the table
         *
         * @var RichText|string|list<RichText|string|array>|null
         */
        #[RichTextType]
        public RichText|string|array|null $caption = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
