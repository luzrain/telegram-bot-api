<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes the paid media added to a message.
 */
final readonly class PaidMediaInfo extends Type
{
    public function __construct(
        /**
         * The number of Telegram Stars that must be paid to buy access to the media
         */
        public int $starCount,

        /**
         * Information about the paid media
         *
         * @var list<PaidMedia>
         */
        #[ArrayType(PaidMedia::class)]
        public array $paidMedia,
    ) {
    }
}
