<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Stickers;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object describes the position on faces where a mask should be placed by default.
 */
final class MaskPosition extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'point',
        'x_shift',
        'y_shift',
        'scale',
    ];

    protected static array $map = [
        'point' => true,
        'x_shift' => true,
        'y_shift' => true,
        'scale' => true,
    ];

    /**
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     */
    protected float $point;

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right.
     * For example, choosing -1.0 will place mask just to the left of the default mask position.
     */
    protected float $xShift;

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom.
     * For example, 1.0 will place the mask just below the default mask position.
     */
    protected float $yShift;

    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     */
    protected float $scale;

    public static function create(
        float $point,
        float $xShift,
        float $yShift,
        float $scale,
    ): self {
        $instance = new self();
        $instance->point = $point;
        $instance->xShift = $xShift;
        $instance->yShift = $yShift;
        $instance->scale = $scale;

        return $instance;
    }

    public function getPoint(): float
    {
        return $this->point;
    }

    public function getXShift(): float
    {
        return $this->xShift;
    }

    public function getYShift(): float
    {
        return $this->yShift;
    }

    public function getScale(): float
    {
        return $this->scale;
    }
}
