<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the state of a revenue withdrawal operation. Currently, it can be one of
 *
 * @see RevenueWithdrawalStatePending
 * @see RevenueWithdrawalStateSucceeded
 * @see RevenueWithdrawalStateFailed
 */
readonly class RevenueWithdrawalState extends Type
{
    protected function __construct(
        /**
         * Type of the transaction partner
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
            RevenueWithdrawalStatePending::TYPE => RevenueWithdrawalStatePending::fromArray($data),
            RevenueWithdrawalStateSucceeded::TYPE => RevenueWithdrawalStateSucceeded::fromArray($data),
            RevenueWithdrawalStateFailed::TYPE => RevenueWithdrawalStateFailed::fromArray($data),
        };
    }
}
