<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Type\Voice;

/**
 * A block with a voice note, corresponding to the HTML tag <audio>.
 */
final readonly class RichBlockVoiceNote extends RichBlock
{
    public const TYPE = 'voice_note';

    public function __construct(
        /**
         * The voice note
         */
        public Voice $voiceNote,

        /**
         * Optional. Caption of the block
         */
        public RichBlockCaption|null $caption = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
