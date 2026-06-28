<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A link to a reference.
 */
final readonly class RichTextReferenceLink extends RichText
{
    public const TYPE = 'reference_link';

    public function __construct(
        /**
         * The link text
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The name of the reference
         */
        public string $referenceName,
    ) {
        parent::__construct(self::TYPE);
    }
}
