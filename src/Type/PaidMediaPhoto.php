<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;

/**
 * The paid media is a photo.
 */
final readonly class PaidMediaPhoto extends PaidMedia
{
    public const TYPE = 'photo';

    protected function __construct(
        /**
         * The photo
         *
         * @var list<PhotoSize>
         */
        #[ArrayType(PhotoSize::class)]
        public array $photo,
    ) {
        parent::__construct(self::TYPE);
    }
}
