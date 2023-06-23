<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Inline;

use Luzrain\TelegramBotApi\BaseType;

/**
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 *
 * @see InlineQueryResultCachedAudio
 * @see InlineQueryResultCachedDocument
 * @see InlineQueryResultCachedGif
 * @see InlineQueryResultCachedMpeg4Gif
 * @see InlineQueryResultCachedPhoto
 * @see InlineQueryResultCachedSticker
 * @see InlineQueryResultCachedVideo
 * @see InlineQueryResultCachedVoice
 * @see InlineQueryResultArticle
 * @see InlineQueryResultAudio
 * @see InlineQueryResultContact
 * @see InlineQueryResultGame
 * @see InlineQueryResultDocument
 * @see InlineQueryResultGif
 * @see InlineQueryResultLocation
 * @see InlineQueryResultMpeg4Gif
 * @see InlineQueryResultPhoto
 * @see InlineQueryResultVenue
 * @see InlineQueryResultVideo
 * @see InlineQueryResultVoice
 */
class InlineQueryResult extends BaseType
{
    protected function __construct()
    {
    }
}
