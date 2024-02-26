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

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        /** @var self $instance */
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            InlineQueryResultCachedAudio::TYPE => InlineQueryResultCachedAudio::fromArray($data),
            InlineQueryResultCachedDocument::TYPE => InlineQueryResultCachedDocument::fromArray($data),
            InlineQueryResultCachedGif::TYPE => InlineQueryResultCachedGif::fromArray($data),
            InlineQueryResultCachedMpeg4Gif::TYPE => InlineQueryResultCachedMpeg4Gif::fromArray($data),
            InlineQueryResultCachedPhoto::TYPE => InlineQueryResultCachedPhoto::fromArray($data),
            InlineQueryResultCachedSticker::TYPE => InlineQueryResultCachedSticker::fromArray($data),
            InlineQueryResultCachedVideo::TYPE => InlineQueryResultCachedVideo::fromArray($data),
            InlineQueryResultCachedVoice::TYPE => InlineQueryResultCachedVoice::fromArray($data),
            InlineQueryResultArticle::TYPE => InlineQueryResultArticle::fromArray($data),
            InlineQueryResultAudio::TYPE => InlineQueryResultAudio::fromArray($data),
            InlineQueryResultContact::TYPE => InlineQueryResultContact::fromArray($data),
            InlineQueryResultGame::TYPE => InlineQueryResultGame::fromArray($data),
            InlineQueryResultDocument::TYPE => InlineQueryResultDocument::fromArray($data),
            InlineQueryResultGif::TYPE => InlineQueryResultGif::fromArray($data),
            InlineQueryResultLocation::TYPE => InlineQueryResultLocation::fromArray($data),
            InlineQueryResultMpeg4Gif::TYPE => InlineQueryResultMpeg4Gif::fromArray($data),
            InlineQueryResultPhoto::TYPE => InlineQueryResultPhoto::fromArray($data),
            InlineQueryResultVenue::TYPE => InlineQueryResultVenue::fromArray($data),
            InlineQueryResultVideo::TYPE => InlineQueryResultVideo::fromArray($data),
            InlineQueryResultVoice::TYPE => InlineQueryResultVoice::fromArray($data),
        };
    }
}
