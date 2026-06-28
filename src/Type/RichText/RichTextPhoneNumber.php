<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A text with a phone number.
 */
final readonly class RichTextPhoneNumber extends RichText
{
    public const TYPE = 'phone_number';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The phone number
         */
        public string $phoneNumber,
    ) {
        parent::__construct(self::TYPE);
    }
}
