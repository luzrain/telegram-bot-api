<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Contains the list of gifts received and owned by a user or a chat.
 */
final readonly class OwnedGifts extends Type
{
    protected function __construct(
        /**
         * The total number of gifts owned by the user or the chat
         */
        public int $totalCount,

        /**
         * The list of gifts
         *
         * @var list<OwnedGift>
         */
        #[ArrayType(OwnedGift::class)]
        public array $gifts,

        /**
         * Optional. Offset for the next request. If empty, then there are no more results
         */
        public string|null $nextOffset = null,
    ) {
    }
}
