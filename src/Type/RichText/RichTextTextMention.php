<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\User;

/**
 * A mention of a Telegram user by their identifier.
 */
final readonly class RichTextTextMention extends RichText
{
    public const TYPE = 'text_mention';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The mentioned user
         */
        public User $user,
    ) {
        parent::__construct(self::TYPE);
    }
}
