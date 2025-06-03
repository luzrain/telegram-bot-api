<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Removes the current profile photo of a managed business account. Requires the can_edit_profile_photo business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class RemoveBusinessAccountProfilePhoto extends Method
{
    protected static string $methodName = 'removeBusinessAccountProfilePhoto';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Pass True to remove the public photo, which is visible even if the main photo is hidden by the business account's privacy settings.
         * After the main photo is removed, the previous profile photo (if present) becomes the main photo.
         */
        protected bool|null $isPublic = null,
    ) {
    }
}
