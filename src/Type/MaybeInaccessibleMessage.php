<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes a message that can be inaccessible to the bot. It can be one of
 *
 * @see Message
 * @see InaccessibleMessage
 *
 * @property-read int $messageId Unique message identifier inside this chat
 * @property-read int $date Date the message was sent in Unix time
 * @property-read Chat $chat Chat the message belongs to
 */
readonly class MaybeInaccessibleMessage extends Type
{
    protected function __construct(private int $date)
    {
    }

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->date) {
            0 => InaccessibleMessage::fromArray($data),
            default => Message::fromArray($data),
        };
    }
}
