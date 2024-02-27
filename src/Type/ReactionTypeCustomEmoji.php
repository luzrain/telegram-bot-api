<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The reaction is based on a custom emoji.
 */
final readonly class ReactionTypeCustomEmoji extends ReactionType
{
    public const TYPE = 'custom_emoji';

    public function __construct(
        /**
         * Custom emoji identifier
         */
        public string $customEmojiId,
    ) {
        parent::__construct(self::TYPE);
    }
}
