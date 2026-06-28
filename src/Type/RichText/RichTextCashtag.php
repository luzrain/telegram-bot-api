<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A cashtag.
 */
final readonly class RichTextCashtag extends RichText
{
    public const TYPE = 'cashtag';

    public function __construct(
        /**
         * The text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The cashtag
         */
        public string $cashtag,
    ) {
        parent::__construct(self::TYPE);
    }
}
