<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

/**
 * Use this method to get information about custom emoji stickers by their identifiers.
 * Returns an Array of Sticker objects.
 *
 * @extends Method<list<Sticker>>
 */
final class GetCustomEmojiStickers extends Method
{
    protected static string $methodName = 'getCustomEmojiStickers';
    protected static string $responseClass = Sticker::class;
    protected static bool $isArrayOfResponse = true;

    public function __construct(
        /**
         * List of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
         *
         * @var list<string>
         */
        protected array $customEmojiIds,
    ) {
    }
}
