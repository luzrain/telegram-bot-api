<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a block in a rich formatted message. Currently, it can be any of the following types:
 *
 * @see RichBlockParagraph
 * @see RichBlockSectionHeading
 * @see RichBlockPreformatted
 * @see RichBlockFooter
 * @see RichBlockDivider
 * @see RichBlockMathematicalExpression
 * @see RichBlockAnchor
 * @see RichBlockList
 * @see RichBlockBlockQuotation
 * @see RichBlockPullQuotation
 * @see RichBlockCollage
 * @see RichBlockSlideshow
 * @see RichBlockTable
 * @see RichBlockDetails
 * @see RichBlockMap
 * @see RichBlockAnimation
 * @see RichBlockAudio
 * @see RichBlockPhoto
 * @see RichBlockVideo
 * @see RichBlockVoiceNote
 * @see RichBlockThinking
 */
readonly class RichBlock extends Type
{
    protected function __construct(
        /**
         * Type of the block
         */
        public string $type,
    ) {
    }

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            RichBlockParagraph::TYPE => RichBlockParagraph::fromArray($data),
            RichBlockSectionHeading::TYPE => RichBlockSectionHeading::fromArray($data),
            RichBlockPreformatted::TYPE => RichBlockPreformatted::fromArray($data),
            RichBlockFooter::TYPE => RichBlockFooter::fromArray($data),
            RichBlockDivider::TYPE => RichBlockDivider::fromArray($data),
            RichBlockMathematicalExpression::TYPE => RichBlockMathematicalExpression::fromArray($data),
            RichBlockAnchor::TYPE => RichBlockAnchor::fromArray($data),
            RichBlockList::TYPE => RichBlockList::fromArray($data),
            RichBlockBlockQuotation::TYPE => RichBlockBlockQuotation::fromArray($data),
            RichBlockPullQuotation::TYPE => RichBlockPullQuotation::fromArray($data),
            RichBlockCollage::TYPE => RichBlockCollage::fromArray($data),
            RichBlockSlideshow::TYPE => RichBlockSlideshow::fromArray($data),
            RichBlockTable::TYPE => RichBlockTable::fromArray($data),
            RichBlockDetails::TYPE => RichBlockDetails::fromArray($data),
            RichBlockMap::TYPE => RichBlockMap::fromArray($data),
            RichBlockAnimation::TYPE => RichBlockAnimation::fromArray($data),
            RichBlockAudio::TYPE => RichBlockAudio::fromArray($data),
            RichBlockPhoto::TYPE => RichBlockPhoto::fromArray($data),
            RichBlockVideo::TYPE => RichBlockVideo::fromArray($data),
            RichBlockVoiceNote::TYPE => RichBlockVoiceNote::fromArray($data),
            RichBlockThinking::TYPE => RichBlockThinking::fromArray($data),
        };
    }
}
