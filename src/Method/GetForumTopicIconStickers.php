<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

/**
 * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user.
 * Requires no parameters. Returns an Array of Sticker objects.
 *
 * @extends Method<list<Sticker>>
 */
final class GetForumTopicIconStickers extends Method
{
    protected static string $methodName = 'getForumTopicIconStickers';
    protected static string $responseClass = Sticker::class;
    protected static bool $isArrayOfResponse = true;

    public function __construct()
    {
    }
}
