<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A bot command.
 */
final readonly class RichTextBotCommand extends RichText
{
    public const TYPE = 'bot_command';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The bot command
         */
        public string $botCommand,
    ) {
        parent::__construct(self::TYPE);
    }
}
