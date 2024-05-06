<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The background is a freeform gradient that rotates after every message in the chat.
 */
final readonly class BackgroundFillFreeformGradient extends BackgroundFill
{
    public const TYPE = 'freeform_gradient';

    public function __construct(
        /**
         * A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
         *
         * @var list<int>
         */
        public array $colors,
    ) {
        parent::__construct(self::TYPE);
    }
}
