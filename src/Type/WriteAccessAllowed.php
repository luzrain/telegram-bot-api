<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu,
 * launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 */
final readonly class WriteAccessAllowed extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess
         */
        public bool|null $fromRequest = null,

        /**
         * Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
         */
        public string|null $webAppName = null,

        /**
         * Optional. True, if the access was granted when the bot was added to the attachment or side menu
         */
        public bool|null $fromAttachmentMenu = null,
    ) {
    }
}
