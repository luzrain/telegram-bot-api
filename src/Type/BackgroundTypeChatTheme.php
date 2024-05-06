<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The background is taken directly from a built-in chat theme.
 */
final readonly class BackgroundTypeChatTheme extends BackgroundType
{
    public const TYPE = 'chat_theme';

    public function __construct(
        /**
         * Document with the pattern
         */
        public Document $document,

        /**
         * Name of the chat theme, which is usually an emoji
         */
        public string $themeName,
    ) {
        parent::__construct(self::TYPE);
    }
}
