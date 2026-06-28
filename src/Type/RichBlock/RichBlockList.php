<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayType;

/**
 * A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 */
final readonly class RichBlockList extends RichBlock
{
    public const TYPE = 'list';

    public function __construct(
        /**
         * Items of the list
         *
         * @var list<RichBlockListItem>
         */
        #[ArrayType(RichBlockListItem::class)]
        public array $items,
    ) {
        parent::__construct(self::TYPE);
    }
}
