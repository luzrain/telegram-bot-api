<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Type\Location;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>.
 */
final readonly class RichBlockMap extends RichBlock
{
    public const TYPE = 'map';

    public function __construct(
        /**
         * Location of the center of the map
         */
        public Location $location,

        /**
         * Map zoom level; 13-20
         */
        public int $zoom,

        /**
         * Expected width of the map
         */
        public int $width,

        /**
         * Expected height of the map
         */
        public int $height,

        /**
         * Optional. Caption of the block
         */
        public RichBlockCaption|null $caption = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
