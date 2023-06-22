<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;
use TelegramBot\Api\Types\Arrays\ArrayOfPhotoSize;
use TelegramBot\Api\Types\Arrays\ArrayOfUser;
use TelegramBot\Api\Types\Games\Game;
use TelegramBot\Api\Types\Passport\PassportData;
use TelegramBot\Api\Types\Payments\Invoice;
use TelegramBot\Api\Types\Payments\SuccessfulPayment;
use TelegramBot\Api\Types\Stickers\Sticker;

/**
 * This object represents a message.
 */
class Message extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'message_id',
        'date',
        'chat',
    ];

    protected static array $map = [
        'message_id' => true,
        'message_thread_id ' => true,
        'from' => User::class,
        'sender_chat' => Chat::class,
        'date' => true,
        'chat' => Chat::class,
        'forward_from' => User::class,
        'forward_from_chat' => Chat::class,
        'forward_from_message_id' => true,
        'forward_signature' => true,
        'forward_sender_name' => true,
        'forward_date' => true,
        'is_topic_message' => true,
        'is_automatic_forward' => true,
        'reply_to_message' => Message::class,
        'via_bot' => User::class,
        'edit_date' => true,
        'has_protected_content' => true,
        'media_group_id' => true,
        'author_signature' => true,
        'text' => true,
        'entities' => ArrayOfMessageEntity::class,
        'animation' => Animation::class,
        'audio' => Audio::class,
        'document' => Document::class,
        'photo' => ArrayOfPhotoSize::class,
        'sticker' => Sticker::class,
        'video' => Video::class,
        'video_note' => VideoNote::class,
        'voice' => Voice::class,
        'caption' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'has_media_spoiler' => true,
        'contact' => Contact::class,
        'dice' => Dice::class,
        'game' => Game::class,
        'poll' => Poll::class,
        'venue' => Venue::class,
        'location' => Location::class,
        'new_chat_members' => ArrayOfUser::class,
        'left_chat_member' => User::class,
        'new_chat_title' => true,
        'new_chat_photo' => ArrayOfPhotoSize::class,
        'delete_chat_photo' => true,
        'group_chat_created' => true,
        'supergroup_chat_created' => true,
        'channel_chat_created' => true,
        'message_auto_delete_timer_changed' => MessageAutoDeleteTimerChanged::class,
        'migrate_to_chat_id' => true,
        'migrate_from_chat_id' => true,
        'pinned_message' => Message::class,
        'invoice' => Invoice::class,
        'successful_payment' => SuccessfulPayment::class,
        'connected_website' => true,
        'write_access_allowed' => WriteAccessAllowed::class,
        'passport_data' => PassportData::class,
        'proximity_alert_triggered' => ProximityAlertTriggered::class,
        'forum_topic_created' => ForumTopicCreated::class,
        'forum_topic_edited' => ForumTopicEdited::class,
        'forum_topic_closed' => ForumTopicClosed::class,
        'forum_topic_reopened' => ForumTopicReopened::class,
        'general_forum_topic_hidden' => GeneralForumTopicHidden::class,
        'general_forum_topic_unhidden' => GeneralForumTopicUnhidden::class,
        'video_chat_scheduled' => VideoChatScheduled::class,
        'video_chat_started' => VideoChatStarted::class,
        'video_chat_ended' => VideoChatEnded::class,
        'video_chat_participants_invited' => VideoChatParticipantsInvited::class,
        'web_app_data' => WebAppData::class,
        'reply_markup' => InlineKeyboardMarkup::class,
    ];

    /**
     * Unique message identifier inside this chat
     */
    protected int $messageId;

    /**
     * Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
     */
    protected ?bool $messageThreadId;

    /**
     * Optional. Sender of the message; empty for messages sent to channels.
     * For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
     */
    protected ?User $from = null;

    /**
     * Optional. Sender of the message, sent on behalf of a chat.
     * For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group
     * administrators, the linked channel for messages automatically forwarded to the discussion group.
     * For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
     */
    protected ?Chat $senderChat = null;

    /**
     * Date the message was sent in Unix time
     */
    protected int $date;

    /**
     * Conversation the message belongs to
     */
    protected Chat $chat;

    /**
     * Optional. For forwarded messages, sender of the original message
     */
    protected ?User $forwardFrom = null;

    /**
     * Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
     */
    protected ?Chat $forwardFromChat = null;

    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel
     */
    protected ?int $forwardFromMessageId = null;

    /**
     * Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator,
     * signature of the message sender if present
     */
    protected ?string $forwardSignature = null;

    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
     */
    protected ?string $forwardSenderName = null;

    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time
     */
    protected ?int $forwardDate = null;

    /**
     * Optional. True, if the message is sent to a forum topic
     */
    protected ?bool $isTopicMessage = null;

    /**
     * Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
     */
    protected ?bool $isAutomaticForward = null;

    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it itself is a reply.
     */
    protected ?Message $replyToMessage = null;

    /**
     * Optional. Bot through which the message was sent
     */
    protected ?User $viaBot = null;

    /**
     * Optional. Date the message was last edited in Unix time
     */
    protected ?int $editDate = null;

    /**
     * Optional. True, if the message can't be forwarded
     */
    protected ?bool $hasProtectedContent = null;

    /**
     * Optional. The unique identifier of a media message group this message belongs to
     */
    protected ?string $mediaGroupId = null;

    /**
     * Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     */
    protected ?string $authorSignature = null;

    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     */
    protected ?string $text = null;

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @var MessageEntity[]
     */
    protected ?array $entities = null;

    /**
     * Optional. Message is an animation, information about the animation.
     * For backward compatibility, when this field is set, the document field will also be set
     */
    protected ?Animation $animation = null;

    /**
     * Optional. Message is an audio file, information about the file
     */
    protected ?Audio $audio = null;

    /**
     * Optional. Message is a general file, information about the file
     */
    protected ?Document $document = null;

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @var PhotoSize[]
     */
    protected ?array $photo = null;

    /**
     * Optional. Message is a sticker, information about the sticker
     */
    protected ?Sticker $sticker = null;

    /**
     * Optional. Message is a video, information about the video
     */
    protected ?Video $video = null;

    /**
     * Optional. Message is a video note, information about the video message
     */
    protected ?VideoNote $videoNote = null;

    /**
     * Optional. Message is a voice message, information about the file
     */
    protected ?Voice $voice = null;

    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     */
    protected ?string $caption = null;

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     *
     * @var MessageEntity[]
     */
    protected ?array $captionEntities = null;

    /**
     * Optional. True, if the message media is covered by a spoiler animation
     */
    protected ?bool $hasMediaSpoiler = null;

    /**
     * Optional. Message is a shared contact, information about the contact
     */
    protected ?Contact $contact = null;

    /**
     * Optional. Message is a dice with random value
     */
    protected ?Dice $dice = null;

    /**
     * Optional. Message is a game, information about the game.
     */
    protected ?Game $game = null;

    /**
     * Optional. Message is a native poll, information about the poll
     */
    protected ?Poll $poll = null;

    /**
     * Optional. Message is a venue, information about the venue.
     * For backward compatibility, when this field is set, the location field will also be set
     */
    protected ?Venue $venue = null;

    /**
     * Optional. Message is a shared location, information about the location
     */
    protected ?Location $location = null;

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     *
     * @var User[]
     */
    protected ?array $newChatMembers = null;

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     */
    protected ?User $leftChatMember = null;

    /**
     * Optional. A chat title was changed to this value
     */
    protected ?string $newChatTitle = null;

    /**
     * Optional. A chat photo was change to this value
     *
     * @var PhotoSize[]
     */
    protected ?array $newChatPhoto = null;

    /**
     * Optional. Service message: the chat photo was deleted
     */
    protected ?bool $deleteChatPhoto = null;

    /**
     * Optional. Service message: the group has been created
     */
    protected ?bool $groupChatCreated = null;

    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message coming through
     * updates, because bot can't be a member of a supergroup when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    protected ?bool $supergroupChatCreated = null;

    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming through
     * updates, because bot can't be a member of a channel when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    protected ?bool $channelChatCreated = null;

    /**
     * Optional. Service message: auto-delete timer settings changed in the chat
     */
    protected ?MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged = null;

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    protected ?int $migrateToChatId = null;

    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    protected ?int $migrateFromChatId = null;

    /**
     * Optional. Specified message was pinned.
     * Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     */
    protected ?Message $pinnedMessage = null;

    /**
     * Optional. Message is an invoice for a payment, information about the invoice.
     */
    protected ?Invoice $invoice = null;

    /**
     * Optional. Message is a service message about a successful payment, information about the payment.
     */
    protected ?SuccessfulPayment $successfulPayment = null;

    /**
     * Optional. The domain name of the website on which the user has logged in.
     */
    protected ?string $connectedWebsite = null;

    /**
     * Optional. Service message: the user allowed the bot added to the attachment menu to write messages
     */
    protected ?WriteAccessAllowed $writeAccessAllowed = null;

    /**
     * Optional. Telegram Passport data
     */
    protected ?PassportData $passportData = null;

    /**
     * Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     */
    protected ?ProximityAlertTriggered $proximityAlertTriggered = null;

    /**
     * Optional. Service message: forum topic created
     */
    protected ?ForumTopicCreated $forumTopicCreated = null;

    /**
     * Optional. Service message: forum topic edited
     */
    protected ?ForumTopicEdited $forumTopicEdited = null;

    /**
     * Optional. Service message: forum topic closed
     */
    protected ?ForumTopicClosed $forumTopicClosed = null;

    /**
     * Optional. Service message: forum topic reopened
     */
    protected ?ForumTopicReopened $forumTopicReopened = null;

    /**
     * Optional. Service message: the 'General' forum topic hidden
     */
    protected ?GeneralForumTopicHidden $generalForumTopicHidden = null;

    /**
     * Optional. Service message: the 'General' forum topic unhidden
     */
    protected ?GeneralForumTopicUnhidden $generalForumTopicUnhidden = null;

    /**
     * Optional. Service message: video chat scheduled
     */
    protected ?VideoChatScheduled $videoChatScheduled = null;

    /**
     * Optional. Service message: video chat started
     */
    protected ?VideoChatStarted $videoChatStarted = null;

    /**
     * Optional. Service message: video chat ended
     */
    protected ?VideoChatEnded $videoChatEnded = null;

    /**
     * Optional. Service message: new participants invited to a video chat
     */
    protected ?VideoChatParticipantsInvited $videoChatParticipantsInvited = null;

    /**
     * Optional. Service message: data sent by a Web App
     */
    protected ?WebAppData $webAppData = null;

    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    protected ?InlineKeyboardMarkup $replyMarkup = null;

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getMessageThreadId(): ?bool
    {
        return $this->messageThreadId;
    }

    public function getFrom(): ?User
    {
        return $this->from;
    }

    public function getSenderChat(): ?Chat
    {
        return $this->senderChat;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getChat(): Chat
    {
        return $this->chat;
    }

    public function getForwardFrom(): ?User
    {
        return $this->forwardFrom;
    }

    public function getForwardFromChat(): ?Chat
    {
        return $this->forwardFromChat;
    }

    public function getForwardFromMessageId(): ?int
    {
        return $this->forwardFromMessageId;
    }

    public function getForwardSignature(): ?string
    {
        return $this->forwardSignature;
    }

    public function getForwardSenderName(): ?string
    {
        return $this->forwardSenderName;
    }

    public function getForwardDate(): ?int
    {
        return $this->forwardDate;
    }

    public function isTopicMessage(): ?bool
    {
        return $this->isTopicMessage;
    }

    public function isAutomaticForward(): ?bool
    {
        return $this->isAutomaticForward;
    }

    public function getReplyToMessage(): ?Message
    {
        return $this->replyToMessage;
    }

    public function getViaBot(): ?User
    {
        return $this->viaBot;
    }

    public function getEditDate(): ?int
    {
        return $this->editDate;
    }

    public function hasProtectedContent(): ?bool
    {
        return $this->hasProtectedContent;
    }

    public function getMediaGroupId(): ?string
    {
        return $this->mediaGroupId;
    }

    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function hasMediaSpoiler(): ?bool
    {
        return $this->hasMediaSpoiler;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function getDice(): ?Dice
    {
        return $this->dice;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @return User[]|null
     */
    public function getNewChatMembers(): ?array
    {
        return $this->newChatMembers;
    }

    public function getLeftChatMember(): ?User
    {
        return $this->leftChatMember;
    }

    public function getNewChatTitle(): ?string
    {
        return $this->newChatTitle;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getNewChatPhoto(): ?array
    {
        return $this->newChatPhoto;
    }

    public function isDeleteChatPhoto(): ?bool
    {
        return $this->deleteChatPhoto;
    }

    public function isGroupChatCreated(): ?bool
    {
        return $this->groupChatCreated;
    }

    public function isSupergroupChatCreated(): ?bool
    {
        return $this->supergroupChatCreated;
    }

    public function isChannelChatCreated(): ?bool
    {
        return $this->channelChatCreated;
    }

    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChanged
    {
        return $this->messageAutoDeleteTimerChanged;
    }

    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    public function getMigrateFromChatId(): ?int
    {
        return $this->migrateFromChatId;
    }

    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return $this->successfulPayment;
    }

    public function getConnectedWebsite(): ?string
    {
        return $this->connectedWebsite;
    }

    public function getWriteAccessAllowed(): ?WriteAccessAllowed
    {
        return $this->writeAccessAllowed;
    }

    public function getPassportData(): ?PassportData
    {
        return $this->passportData;
    }

    public function getProximityAlertTriggered(): ?ProximityAlertTriggered
    {
        return $this->proximityAlertTriggered;
    }

    public function getForumTopicCreated(): ?ForumTopicCreated
    {
        return $this->forumTopicCreated;
    }

    public function getForumTopicEdited(): ?ForumTopicEdited
    {
        return $this->forumTopicEdited;
    }

    public function getForumTopicClosed(): ?ForumTopicClosed
    {
        return $this->forumTopicClosed;
    }

    public function getForumTopicReopened(): ?ForumTopicReopened
    {
        return $this->forumTopicReopened;
    }

    public function getGeneralForumTopicHidden(): ?GeneralForumTopicHidden
    {
        return $this->generalForumTopicHidden;
    }

    public function getGeneralForumTopicUnhidden(): ?GeneralForumTopicUnhidden
    {
        return $this->generalForumTopicUnhidden;
    }

    public function getVideoChatScheduled(): ?VideoChatScheduled
    {
        return $this->videoChatScheduled;
    }

    public function getVideoChatStarted(): ?VideoChatStarted
    {
        return $this->videoChatStarted;
    }

    public function getVideoChatEnded(): ?VideoChatEnded
    {
        return $this->videoChatEnded;
    }

    public function getVideoChatParticipantsInvited(): ?VideoChatParticipantsInvited
    {
        return $this->videoChatParticipantsInvited;
    }

    public function getWebAppData(): ?WebAppData
    {
        return $this->webAppData;
    }

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }
}
