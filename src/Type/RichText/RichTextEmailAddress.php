<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A text with an email address.
 */
final readonly class RichTextEmailAddress extends RichText
{
    public const TYPE = 'email_address';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The email address
         */
        public string $emailAddress,
    ) {
        parent::__construct(self::TYPE);
    }
}
