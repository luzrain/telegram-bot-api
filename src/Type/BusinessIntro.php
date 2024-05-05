<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

final readonly class BusinessIntro extends Type
{
    public function __construct(
        /**
         * Optional. Title text of the business intro
         */
        public string|null $title = null,

        /**
         * Optional. Message text of the business intro
         */
        public string|null $message = null,

        /**
         * Optional. Sticker of the business intro
         */
        public Sticker|null $sticker = null,
    ) {
    }
}
