<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

/**
 * An anchor.
 */
final readonly class RichTextAnchor extends RichText
{
    public const TYPE = 'anchor';

    public function __construct(
        /**
         * The name of the anchor
         */
        public string $name,
    ) {
        parent::__construct(self::TYPE);
    }
}
