<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Stickers;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object describes the position on faces where a mask should be placed by default.
 */
final readonly class MaskPosition extends BaseType implements TypeInterface
{
    public function __construct(
        /**
         * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
         */
        public float $point,

        /**
         * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right.
         * For example, choosing -1.0 will place mask just to the left of the default mask position.
         */
        public float $xShift,

        /**
         * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom.
         * For example, 1.0 will place the mask just below the default mask position.
         */
        public float $yShift,

        /**
         * Mask scaling coefficient. For example, 2.0 means double size.
         */
        public float $scale,
    ) {
    }
}
