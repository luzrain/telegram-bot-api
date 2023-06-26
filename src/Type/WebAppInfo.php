<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * Describes a Web App.
 */
final readonly class WebAppInfo extends Type implements TypeDenormalizable
{
    public function __construct(
        /**
         * An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
         */
        public string $url,
    ) {
    }
}
