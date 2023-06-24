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
    protected static array $requiredParams = [];

    protected static array $map = [
        'can_send_messages' => true,
        'can_send_audios' => true,
        'can_send_documents' => true,
        'can_send_photos' => true,
        'can_send_videos' => true,
        'can_send_video_notes' => true,
        'can_send_voice_notes' => true,
        'can_send_polls' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_previews' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_pin_messages' => true,
        'can_manage_topics' => true,
    ];

    /**
     * Optional. True, if the user is allowed to send text messages, contacts, locations and venues
     */
    protected bool|null $canSendMessages = null;

    /**
     * Optional. True, if the user is allowed to send audios
     */
    protected bool|null $canSendAudios = null;

    /**
     * Optional. True, if the user is allowed to send documents
     */
    protected bool|null $canSendDocuments = null;

    /**
     * Optional. True, if the user is allowed to send photos
     */
    protected bool|null $canSendPhotos = null;

    /**
     * Optional. True, if the user is allowed to send videos
     */
    protected bool|null $canSendVideos = null;

    /**
     * Optional. True, if the user is allowed to send video notes
     */
    protected bool|null $canSendVideoNotes = null;

    /**
     * Optional. True, if the user is allowed to send voice notes
     */
    protected bool|null $canSendVoiceNotes = null;

    /**
     * Optional. True, if the user is allowed to send polls, implies can_send_messages
     */
    protected bool|null $canSendPolls = null;

    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
     */
    protected bool|null $canSendOtherMessages = null;

    /**
     * Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
     */
    protected bool|null $canAddWebPagePreviews = null;

    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
     */
    protected bool|null $canChangeInfo = null;

    /**
     * Optional. True, if the user is allowed to invite new users to the chat
     */
    protected bool|null $canInviteUsers = null;

    /**
     *Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     */
    protected bool|null $canPinMessages = null;

    /**
     * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
     */
    protected bool|null $canManageTopics = null;

    public static function create(
        bool|null $canSendMessages = null,
        bool|null $canSendAudios = null,
        bool|null $canSendDocuments = null,
        bool|null $canSendPhotos = null,
        bool|null $canSendVideos = null,
        bool|null $canSendVideoNotes = null,
        bool|null $canSendVoiceNotes = null,
        bool|null $canSendPolls = null,
        bool|null $canSendOtherMessages = null,
        bool|null $canAddWebPagePreviews = null,
        bool|null $canChangeInfo = null,
        bool|null $canInviteUsers = null,
        bool|null $canPinMessages = null,
        bool|null $canManageTopics = null,
    ): self {
        $instance = new self();
        $instance->canSendMessages = $canSendMessages;
        $instance->canSendAudios = $canSendAudios;
        $instance->canSendDocuments = $canSendDocuments;
        $instance->canSendPhotos = $canSendPhotos;
        $instance->canSendVideos = $canSendVideos;
        $instance->canSendVideoNotes = $canSendVideoNotes;
        $instance->canSendVoiceNotes = $canSendVoiceNotes;
        $instance->canSendPolls = $canSendPolls;
        $instance->canSendOtherMessages = $canSendOtherMessages;
        $instance->canAddWebPagePreviews = $canAddWebPagePreviews;
        $instance->canChangeInfo = $canChangeInfo;
        $instance->canInviteUsers = $canInviteUsers;
        $instance->canPinMessages = $canPinMessages;
        $instance->canManageTopics = $canManageTopics;

        return $instance;
    }

    public function isCanSendMessages(): bool|null
    {
        return $this->canSendMessages;
    }

    public function getCanSendAudios(): bool|null
    {
        return $this->canSendAudios;
    }

    public function getCanSendDocuments(): bool|null
    {
        return $this->canSendDocuments;
    }

    public function getCanSendPhotos(): bool|null
    {
        return $this->canSendPhotos;
    }

    public function getCanSendVideos(): bool|null
    {
        return $this->canSendVideos;
    }

    public function getCanSendVideoNotes(): bool|null
    {
        return $this->canSendVideoNotes;
    }

    public function getCanSendVoiceNotes(): bool|null
    {
        return $this->canSendVoiceNotes;
    }

    public function isCanSendPolls(): bool|null
    {
        return $this->canSendPolls;
    }

    public function isCanSendOtherMessages(): bool|null
    {
        return $this->canSendOtherMessages;
    }

    public function isCanAddWebPagePreviews(): bool|null
    {
        return $this->canAddWebPagePreviews;
    }

    public function isCanChangeInfo(): bool|null
    {
        return $this->canChangeInfo;
    }

    public function isCanInviteUsers(): bool|null
    {
        return $this->canInviteUsers;
    }

    public function isCanPinMessages(): bool|null
    {
        return $this->canPinMessages;
    }

    public function getCanManageTopics(): bool|null
    {
        return $this->canManageTopics;
    }
}
