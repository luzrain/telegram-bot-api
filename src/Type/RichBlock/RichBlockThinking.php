<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Internal\RichTextType;
use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * A block with a "Thinking…" placeholder, corresponding to the custom HTML tag <tg-thinking>.
 * The block may be used only in sendRichMessageDraft, therefore it can't be received in messages.
 * See https://t.me/addemoji/AIActions for examples of custom emoji, which are recommended for usage in the block.
 */
final readonly class RichBlockThinking extends RichBlock
{
    public const TYPE = 'thinking';

    public function __construct(
        /**
         * Text of the block. See https://t.me/addemoji/AIActions for examples of custom emoji, which are recommended for usage in the block.
         *
         * @var RichText|string|list<RichText|string|array>
         */
        #[RichTextType]
        public RichText|string|array $text,
    ) {
        parent::__construct(self::TYPE);
    }
}
