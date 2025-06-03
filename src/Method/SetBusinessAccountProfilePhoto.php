<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InputProfilePhoto;

/**
 * Changes the profile photo of a managed business account. Requires the can_edit_profile_photo business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetBusinessAccountProfilePhoto extends Method
{
    protected static string $methodName = 'setBusinessAccountProfilePhoto';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * The new profile photo to set
         */
        protected InputProfilePhoto $photo,

        /**
         * Pass True to set the public photo, which will be visible even if the main photo is hidden by the business account's privacy settings. An account can have only one public photo.
         */
        protected bool|null $isPublic = null,
    ) {
    }
}
