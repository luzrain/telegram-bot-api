<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\ChatPermissions;

/**
 * Use this method to set default chat permissions for all members.
 * The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights.
 * Returns True on success.
 */
final class SetChatPermissions extends BaseMethod
{
    protected static string $methodName = 'setChatPermissions';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,

        /**
         * A JSON-serialized object for new default chat permissions
         */
        protected ChatPermissions $permissions,

        /**
         * Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and can_add_web_page_previews
         * permissions will imply the can_send_messages, can_send_audios, can_send_documents, can_send_photos, can_send_videos, can_send_video_notes,
         * and can_send_voice_notes permissions; the can_send_polls permission will imply the can_send_messages permission.
         */
        protected bool|null $useIndependentChatPermissions = null,
    ) {
    }
}
