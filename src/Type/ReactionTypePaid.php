<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The reaction is paid.
 */
final readonly class ReactionTypePaid extends ReactionType
{
    public const TYPE = 'paid';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
