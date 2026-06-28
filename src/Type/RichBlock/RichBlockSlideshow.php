<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayType;

/**
 * A slideshow, corresponding to the custom HTML tag <tg-slideshow>.
 */
final readonly class RichBlockSlideshow extends RichBlock
{
    public const TYPE = 'slideshow';

    public function __construct(
        /**
         * Elements of the slideshow
         *
         * @var list<RichBlock>
         */
        #[ArrayType(RichBlock::class)]
        public array $blocks,

        /**
         * Optional. Caption of the block
         */
        public RichBlockCaption|null $caption = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
