<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\Arrays\ArrayOfStickers;

/**
 * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
 */
final class GetCustomEmojiStickers extends BaseMethod
{
    protected static string $methodName = 'getCustomEmojiStickers';
    protected static string $responseClass = ArrayOfStickers::class;

    public function __construct(

        /**
         * List of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
         *
         * @var string[]
         */
        protected array $customEmojiIds,
    ) {
    }
}
