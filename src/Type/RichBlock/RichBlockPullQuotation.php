<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * A quotation with centered text, loosely corresponding to the HTML tag <aside>.
 */
final readonly class RichBlockPullQuotation extends RichBlock
{
    public const TYPE = 'pullquote';

    public function __construct(
        /**
         * Text of the block
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * Optional. Credit of the block
         *
         * @var RichText|string|list<RichText|string|array>|null
         */
        #[RichTextType]
        public RichText|string|array|null $credit = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
