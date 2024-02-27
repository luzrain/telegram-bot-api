<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 */
final readonly class ChatMemberRestricted extends ChatMember
{
    public const STATUS = 'restricted';

    protected function __construct(
        /**
         * Information about the user
         */
        public User $user,

        /**
         * True, if the user is a member of the chat at the moment of the request
         */
        public bool $isMember,

        /**
         * True, if the user is allowed to send text messages, contacts, invoices, locations and venues
         */
        public bool $canSendMessages,

        /**
         * True, if the user is allowed to send audios
         */
        public bool $canSendAudios,

        /**
         * True, if the user is allowed to send documents
         */
        public bool $canSendDocuments,

        /**
         * True, if the user is allowed to send photos
         */
        public bool $canSendPhotos,

        /**
         * True, if the user is allowed to send videos
         */
        public bool $canSendVideos,

        /**
         * True, if the user is allowed to send video notes
         */
        public bool $canSendVideoNotes,

        /**
         * True, if the user is allowed to send voice notes
         */
        public bool $canSendVoiceNotes,

        /**
         * True, if the user is allowed to send polls
         */
        public bool $canSendPolls,

        /**
         * True, if the user is allowed to send animations, games, stickers and use inline bots
         */
        public bool $canSendOtherMessages,

        /**
         * True, if the user is allowed to add web page previews to their messages
         */
        public bool $canAddWebPagePreviews,

        /**
         * True, if the user is allowed to change the chat title, photo and other settings
         */
        public bool $canChangeInfo,

        /**
         * True, if the user is allowed to invite new users to the chat
         */
        public bool $canInviteUsers,

        /**
         * True, if the user is allowed to pin messages
         */
        public bool $canPinMessages,

        /**
         * True, if the user is allowed to create forum topics
         */
        public bool $canManageTopics,

        /**
         * Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever
         */
        public int $untilDate,
    ) {
        parent::__construct(self::STATUS);
    }
}
