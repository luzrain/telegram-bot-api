<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Type\Video;

/**
 * A block with a video, corresponding to the HTML tag <video>.
 */
final readonly class RichBlockVideo extends RichBlock
{
    public const TYPE = 'video';

    public function __construct(
        /**
         * The video
         */
        public Video $video,

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
