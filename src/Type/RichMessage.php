<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\RichBlock\RichBlock;

/**
 * Rich formatted message.
 */
final readonly class RichMessage extends Type
{
    protected function __construct(
        /**
         * Content of the message
         *
         * @var list<RichBlock>
         */
        #[ArrayType(RichBlock::class)]
        public array $blocks,

        /**
         * Optional. True, if the rich message must be shown right-to-left
         */
        public bool|null $isRtl = null,
    ) {
    }
}
