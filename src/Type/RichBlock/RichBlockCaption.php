<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * Caption of a rich formatted block.
 */
final readonly class RichBlockCaption extends Type
{
    protected function __construct(
        /**
         * Block caption
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * Optional. Block credit which corresponds to the HTML tag <cite>
         *
         * @var RichText|string|list<RichText|string|array>|null
         */
        #[RichTextType]
        public RichText|string|array|null $credit = null,
    ) {
    }
}
