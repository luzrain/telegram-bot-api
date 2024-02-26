<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes the options used for link preview generation.
 */
final readonly class LinkPreviewOptions extends Type
{
    public function __construct(
        /**
         * Optional. True, if the link preview is disabled
         */
        public bool|null $isDisabled = null,

        /**
         * Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used
         */
        public string|null $url = null,

        /**
         * Optional. True, if the media in the link preview is supposed to be shrunk;
         * ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
         */
        public bool|null $preferSmallMedia = null,

        /**
         * Optional. True, if the media in the link preview is supposed to be enlarged;
         * ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
         */
        public bool|null $preferLargeMedia = null,

        /**
         * Optional. True, if the link preview must be shown above the message text;
         * otherwise, the link preview will be shown below the message text
         */
        public bool|null $showAboveText = null,
    ) {
    }
}
