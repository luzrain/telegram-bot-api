<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\Stickers\StickerSet;

/**
 * Use this method to get a sticker set. On success, a StickerSet object is returned.
 */
final class GetStickerSet extends BaseMethod
{
    protected static string $methodName = 'getStickerSet';
    protected static string $responseClass = StickerSet::class;

    public function __construct(

        /**
         * Name of the sticker set
         */
        protected string $name,
    ) {
    }
}
