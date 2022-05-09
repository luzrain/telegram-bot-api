<?php

namespace TelegramBot\Api\Types;

/**
 * This object represents the content of a media message to be sent. It should be one of
 *
 * @see InputMediaAnimation
 * @see InputMediaDocument
 * @see InputMediaAudio
 * @see InputMediaPhoto
 * @see InputMediaVideo
 */
class InputMedia extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'type',
    ];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Type of the result
     */
    protected string $type;

    public static function fromResponse(array $data): self
    {
        $instance = parent::fromResponse($data);

        if (self::class !== static::class) {
            return $instance;
        }

        return match($instance->type) {
            'animation' => InputMediaAnimation::fromResponse($data),
            'document' => InputMediaDocument::fromResponse($data),
            'audio' => InputMediaAudio::fromResponse($data),
            'photo' => InputMediaPhoto::fromResponse($data),
            'video' => InputMediaVideo::fromResponse($data),
        };
    }
}
