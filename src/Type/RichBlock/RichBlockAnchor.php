<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

/**
 * A block with an anchor, corresponding to the HTML tag <a> with the attribute name.
 */
final readonly class RichBlockAnchor extends RichBlock
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
