<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A text with a bank card number.
 */
final readonly class RichTextBankCardNumber extends RichText
{
    public const TYPE = 'bank_card_number';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The bank card number
         */
        public string $bankCardNumber,
    ) {
        parent::__construct(self::TYPE);
    }
}
