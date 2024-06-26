<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;

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
readonly class InlineQueryResult extends Type
{
    protected function __construct(
        /**
         * Type of the result
         */
        public string $type,
    ) {
    }
}
