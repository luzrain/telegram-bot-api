<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Internal\RichTextType;

/**
 * A reference.
 */
final readonly class RichTextReference extends RichText
{
    public const TYPE = 'reference';

    public function __construct(
        /**
         * Text of the reference
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * The name of the reference
         */
        public string $name,
    ) {
        parent::__construct(self::TYPE);
    }
}
