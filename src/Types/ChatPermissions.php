<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions extends BaseType implements TypeInterface
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
    protected ?bool $canSendMessages = null;

    /**
     * Optional. True, if the user is allowed to send audios
     */
    protected ?bool $canSendAudios = null;

    /**
     * Optional. True, if the user is allowed to send documents
     */
    protected ?bool $canSendDocuments = null;

    /**
     * Optional. True, if the user is allowed to send photos
     */
    protected ?bool $canSendPhotos = null;

    /**
     * Optional. True, if the user is allowed to send videos
     */
    protected ?bool $canSendVideos = null;

    /**
     * Optional. True, if the user is allowed to send video notes
     */
    protected ?bool $canSendVideoNotes = null;

    /**
     * Optional. True, if the user is allowed to send voice notes
     */
    protected ?bool $canSendVoiceNotes = null;

    /**
     * Optional. True, if the user is allowed to send polls, implies can_send_messages
     */
    protected ?bool $canSendPolls = null;

    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
     */
    protected ?bool $canSendOtherMessages = null;

    /**
     * Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
     */
    protected ?bool $canAddWebPagePreviews = null;

    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
     */
    protected ?bool $canChangeInfo = null;

    /**
     * Optional. True, if the user is allowed to invite new users to the chat
     */
    protected ?bool $canInviteUsers = null;

    /**
     *Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     */
    protected ?bool $canPinMessages = null;

    /**
     * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
     */
    protected ?bool $canManageTopics = null;

    public static function create(
        ?bool $canSendMessages = null,
        ?bool $canSendAudios = null,
        ?bool $canSendDocuments = null,
        ?bool $canSendPhotos = null,
        ?bool $canSendVideos = null,
        ?bool $canSendVideoNotes = null,
        ?bool $canSendVoiceNotes = null,
        ?bool $canSendPolls = null,
        ?bool $canSendOtherMessages = null,
        ?bool $canAddWebPagePreviews = null,
        ?bool $canChangeInfo = null,
        ?bool $canInviteUsers = null,
        ?bool $canPinMessages = null,
        ?bool $canManageTopics = null,
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

    public function isCanSendMessages(): ?bool
    {
        return $this->canSendMessages;
    }

    public function getCanSendAudios(): ?bool
    {
        return $this->canSendAudios;
    }

    public function getCanSendDocuments(): ?bool
    {
        return $this->canSendDocuments;
    }

    public function getCanSendPhotos(): ?bool
    {
        return $this->canSendPhotos;
    }

    public function getCanSendVideos(): ?bool
    {
        return $this->canSendVideos;
    }

    public function getCanSendVideoNotes(): ?bool
    {
        return $this->canSendVideoNotes;
    }

    public function getCanSendVoiceNotes(): ?bool
    {
        return $this->canSendVoiceNotes;
    }

    public function isCanSendPolls(): ?bool
    {
        return $this->canSendPolls;
    }

    public function isCanSendOtherMessages(): ?bool
    {
        return $this->canSendOtherMessages;
    }

    public function isCanAddWebPagePreviews(): ?bool
    {
        return $this->canAddWebPagePreviews;
    }

    public function isCanChangeInfo(): ?bool
    {
        return $this->canChangeInfo;
    }

    public function isCanInviteUsers(): ?bool
    {
        return $this->canInviteUsers;
    }

    public function isCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    public function getCanManageTopics(): ?bool
    {
        return $this->canManageTopics;
    }
}
