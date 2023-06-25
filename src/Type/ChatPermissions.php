<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
final class ChatPermissions extends BaseType implements TypeInterface
{
    public function __construct(
        /**
         * Optional. True, if the user is allowed to send text messages, contacts, locations and venues
         */
        public bool|null $canSendMessages = null,

        /**
         * Optional. True, if the user is allowed to send audios
         */
        public bool|null $canSendAudios = null,

        /**
         * Optional. True, if the user is allowed to send documents
         */
        public bool|null $canSendDocuments = null,

        /**
         * Optional. True, if the user is allowed to send photos
         */
        public bool|null $canSendPhotos = null,

        /**
         * Optional. True, if the user is allowed to send videos
         */
        public bool|null $canSendVideos = null,

        /**
         * Optional. True, if the user is allowed to send video notes
         */
        public bool|null $canSendVideoNotes = null,

        /**
         * Optional. True, if the user is allowed to send voice notes
         */
        public bool|null $canSendVoiceNotes = null,

        /**
         * Optional. True, if the user is allowed to send polls, implies can_send_messages
         */
        public bool|null $canSendPolls = null,

        /**
         * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
         */
        public bool|null $canSendOtherMessages = null,

        /**
         * Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
         */
        public bool|null $canAddWebPagePreviews = null,
        /**
         * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
         */
        public bool|null $canChangeInfo = null,

        /**
         * Optional. True, if the user is allowed to invite new users to the chat
         */
        public bool|null $canInviteUsers = null,

        /**
         *Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
         */
        public bool|null $canPinMessages = null,

        /**
         * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
         */
        public bool|null $canManageTopics = null,
    ) {
    }
}
