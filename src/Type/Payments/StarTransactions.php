<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Contains a list of Telegram Star transactions.
 */
final readonly class StarTransactions extends Type
{
    protected function __construct(
        /**
         * The list of transactions
         *
         * @var list<StarTransaction>
         */
        #[ArrayType(StarTransaction::class)]
        public array $transactions,
    ) {
    }
}
