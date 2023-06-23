<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfStickers;

/**
 * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user.
 * Requires no parameters. Returns an Array of Sticker objects.
 */
final class GetForumTopicIconStickers extends BaseMethod
{
    protected static string $methodName = 'getForumTopicIconStickers';
    protected static string $responseClass = ArrayOfStickers::class;

    public function __construct()
    {
    }
}
