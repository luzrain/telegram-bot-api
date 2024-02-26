<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a Web App.
 */
final readonly class WebAppInfo extends Type
{
    public function __construct(
        /**
         * An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
         */
        public string $url,
    ) {
    }
}
