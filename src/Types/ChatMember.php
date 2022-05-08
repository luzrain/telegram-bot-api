<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

class ChatMember extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'user',
        'status',
    ];

    protected static array $map = [
        'user' => User::class,
        'status' => true,
        'until_date' => true,
        'can_be_edited' => true,
        'can_change_info' => true,
        'can_post_messages' => true,
        'can_edit_messages' => true,
        'can_delete_messages' => true,
        'can_invite_users' => true,
        'can_restrict_members' => true,
        'can_pin_messages' => true,
        'can_promote_members' => true,
        'can_send_messages' => true,
        'can_send_media_messages' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_previews' => true,
    ];

    /**
     * Information about the user
     *
     * @var User
     */
    protected $user;

    /**
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
     *
     * @var string
     */
    protected $status;

    /**
     * Optional. Restictred and kicked only. Date when restrictions will be lifted for this user, unix time
     *
     * @var integer
     */
    protected $untilDate;

    /**
     * Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     *
     * @var bool
     */
    protected $canBeEdited;

    /**
     * Optional. Administrators only. True, if the administrator can change the chat title, photo and other settings
     *
     * @var bool
     */
    protected $canChangeInfo;

    /**
     * Optional. Administrators only. True, if the administrator can post in the channel, channels only
     *
     * @var bool
     */
    protected $canPostMessages;

    /**
     * Optional. Administrators only. True, if the administrator can edit messages of other users, channels only
     *
     * @var bool
     */
    protected $canEditMessages;

    /**
     * Optional. Administrators only. True, if the administrator can delete messages of other users
     *
     * @var bool
     */
    protected $canDeleteMessages;

    /**
     * Optional. Administrators only. True, if the administrator can invite new users to the chat
     *
     * @var bool
     */
    protected $canInviteUsers;

    /**
     * Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
     *
     * @var bool
     */
    protected $canRestrictMembers;

    /**
     * Optional. Administrators only. True, if the administrator can pin messages, supergroups only
     *
     * @var bool
     */
    protected $canPinMessages;

    /**
     * Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own
     * privileges or demote administrators that he has promoted, directly or indirectly
     * (promoted by administrators that were appointed by the user)
     *
     * @var bool
     */
    protected $canPromoteMembers;

    /**
     * Optional. Restricted only. True, if the user can send text messages, contacts, locations and venues
     *
     * @var bool
     */
    protected $canSendMessages;

    /**
     * Optional. Restricted only. True, if the user can send audios, documents, photos, videos, video notes
     * and voice notes, implies can_send_messages
     *
     * @var bool
     */
    protected $canSendMediaMessages;

    /**
     * Optional. Restricted only. True, if the user can send animations, games, stickers and use inline bots,
     * implies can_send_media_messages
     *
     * @var bool
     */
    protected $canSendOtherMessages;

    /**
     * Optional. Restricted only. True, if user may add web page previews to his messages,
     * implies can_send_media_messages
     *
     * @var bool
     */
    protected $canAddWebPagePreviews;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }



    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }



    /**
     * @return int
     */
    public function getUntilDate()
    {
        return $this->untilDate;
    }



    /**
     * @return bool
     */
    public function getCanBeEdited()
    {
        return $this->canBeEdited;
    }



    /**
     * @return bool
     */
    public function getCanChangeInfo()
    {
        return $this->canChangeInfo;
    }



    /**
     * @return bool
     */
    public function getCanPostMessages()
    {
        return $this->canPostMessages;
    }


    /**
     * @return bool
     */
    public function getCanEditMessages()
    {
        return $this->canEditMessages;
    }


    /**
     * @return bool
     */
    public function getCanDeleteMessages()
    {
        return $this->canDeleteMessages;
    }



    /**
     * @return bool
     */
    public function getCanInviteUsers()
    {
        return $this->canInviteUsers;
    }


    /**
     * @return bool
     */
    public function getCanRestrictMembers()
    {
        return $this->canRestrictMembers;
    }


    /**
     * @return bool
     */
    public function getCanPinMessages()
    {
        return $this->canPinMessages;
    }


    /**
     * @return bool
     */
    public function getCanPromoteMembers()
    {
        return $this->canPromoteMembers;
    }



    /**
     * @return bool
     */
    public function getCanSendMessages()
    {
        return $this->canSendMessages;
    }


    /**
     * @return bool
     */
    public function getCanSendMediaMessages()
    {
        return $this->canSendMediaMessages;
    }


    /**
     * @return bool
     */
    public function getCanSendOtherMessages()
    {
        return $this->canSendOtherMessages;
    }



    /**
     * @return bool
     */
    public function getCanAddWebPagePreviews()
    {
        return $this->canAddWebPagePreviews;
    }

}
