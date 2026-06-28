<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A mention by a username.
 */
final readonly class RichTextMention extends RichText
{
    public const TYPE = 'mention';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The username
         */
        public string $username,
    ) {
        parent::__construct(self::TYPE);
    }
}
