<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the origin of a message. It can be one of
 *
 * @see MessageOriginUser
 * @see MessageOriginHiddenUser
 * @see MessageOriginChat
 * @see MessageOriginChannel
 */
readonly class MessageOrigin extends Type
{
    protected function __construct(
        /**
         * Type of the message origin
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
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            MessageOriginUser::TYPE => MessageOriginUser::fromArray($data),
            MessageOriginHiddenUser::TYPE => MessageOriginHiddenUser::fromArray($data),
            MessageOriginChat::TYPE => MessageOriginChat::fromArray($data),
            MessageOriginChannel::TYPE => MessageOriginChannel::fromArray($data),
        };
    }
}
