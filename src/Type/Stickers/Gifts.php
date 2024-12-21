<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Stickers;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represent a list of gifts.
 */
final readonly class Gifts extends Type
{
    protected function __construct(
        /**
         * The list of gifts
         *
         * @var list<Gift>
         */
        #[ArrayType(Gift::class)]
        public array $gifts,
    ) {
    }
}
