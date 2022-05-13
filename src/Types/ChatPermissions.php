<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [
        'can_send_messages' => true,
        'can_send_media_messages' => true,
        'can_send_polls' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_previews' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_pin_messages' => true,
    ];

    /**
     * Optional. True, if the user is allowed to send text messages, contacts, locations and venues
     */
    protected ?bool $canSendMessages = null;

    /**
     * Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
     */
    protected ?bool $canSendMediaMessages = null;

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

    public static function create(
        ?bool $canSendMessages = null,
        ?bool $canSendMediaMessages = null,
        ?bool $canSendPolls = null,
        ?bool $canSendOtherMessages = null,
        ?bool $canAddWebPagePreviews = null,
        ?bool $canChangeInfo = null,
        ?bool $canInviteUsers = null,
        ?bool $canPinMessages = null,
    ): self {
        $instance = new self();
        $instance->canSendMessages = $canSendMessages;
        $instance->canSendMediaMessages = $canSendMediaMessages;
        $instance->canSendPolls = $canSendPolls;
        $instance->canSendOtherMessages = $canSendOtherMessages;
        $instance->canAddWebPagePreviews = $canAddWebPagePreviews;
        $instance->canChangeInfo = $canChangeInfo;
        $instance->canInviteUsers = $canInviteUsers;
        $instance->canPinMessages = $canPinMessages;

        return $instance;
    }

    public function isCanSendMessages(): ?bool
    {
        return $this->canSendMessages;
    }

    public function isCanSendMediaMessages(): ?bool
    {
        return $this->canSendMediaMessages;
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
}
