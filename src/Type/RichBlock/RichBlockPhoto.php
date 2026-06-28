<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\PhotoSize;

/**
 * A block with a photo, corresponding to the HTML tag <img>.
 */
final readonly class RichBlockPhoto extends RichBlock
{
    public const TYPE = 'photo';

    public function __construct(
        /**
         * Available sizes of the photo
         *
         * @var list<PhotoSize>
         */
        #[ArrayType(PhotoSize::class)]
        public array $photo,

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
