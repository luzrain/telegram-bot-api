<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Types\Stickers\MaskPosition;

/**
 * Use this method to change the mask position of a mask sticker.
 * The sticker must belong to a sticker set that was created by the bot.
 * Returns True on success.
 */
final class SetStickerMaskPosition extends BaseMethod
{
    protected static string $methodName = 'setStickerMaskPosition';

    public function __construct(

        /**
         * File identifier of the sticker
         */
        protected string $sticker,

        /**
         * A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
         */
        protected MaskPosition|null $maskPosition = null,
    ) {
    }
}
