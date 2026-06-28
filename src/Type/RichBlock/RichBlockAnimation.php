<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Type\Animation;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 */
final readonly class RichBlockAnimation extends RichBlock
{
    public const TYPE = 'animation';

    public function __construct(
        /**
         * The animation
         */
        public Animation $animation,

        /**
         * Optional. True, if the media preview is covered by a spoiler animation
         */
        public true|null $hasSpoiler = null,

        /**
         * Optional. Caption of the block
         */
        public RichBlockCaption|null $caption = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
