<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * A preformatted text block, corresponding to the nested HTML tags <pre> and <code>.
 */
final readonly class RichBlockPreformatted extends RichBlock
{
    public const TYPE = 'pre';

    public function __construct(
        /**
         * Text of the block
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,

        /**
         * Optional. The programming language of the text
         */
        public string|null $language = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
