<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InputProfilePhoto;

/**
 * Changes the profile photo of the bot. Returns True on success.
 *
 * @extends Method<true>
 */
final class SetMyProfilePhoto extends Method
{
    protected static string $methodName = 'setMyProfilePhoto';

    public function __construct(
        /**
         * The new profile photo to set
         */
        protected InputProfilePhoto $photo,
    ) {
    }
}
