<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Type\Audio;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 */
final readonly class RichBlockAudio extends RichBlock
{
    public const TYPE = 'audio';

    public function __construct(
        /**
         * The audio
         */
        public Audio $audio,

        /**
         * Optional. Caption of the block
         */
        public RichBlockCaption|null $caption = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
