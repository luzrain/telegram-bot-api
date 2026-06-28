<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

/**
 * A divider, corresponding to the HTML tag <hr/>.
 */
final readonly class RichBlockDivider extends RichBlock
{
    public const TYPE = 'divider';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
