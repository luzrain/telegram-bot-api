<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayType;

/**
 * A collage, corresponding to the custom HTML tag <tg-collage>.
 */
final readonly class RichBlockCollage extends RichBlock
{
    public const TYPE = 'collage';

    public function __construct(
        /**
         * Elements of the collage
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
