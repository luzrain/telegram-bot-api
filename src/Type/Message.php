<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntity;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfPhotoSize;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfUser;
use Luzrain\TelegramBotApi\Type\Games\Game;
use Luzrain\TelegramBotApi\Type\Passport\PassportData;
use Luzrain\TelegramBotApi\Type\Payments\Invoice;
use Luzrain\TelegramBotApi\Type\Payments\SuccessfulPayment;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a message.
 */
final class Message extends BaseType implements TypeInterface
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
        'user_shared' => UserShared::class,
        'chat_shared' => ChatShared::class,
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
    protected bool|null $messageThreadId;

    /**
     * Optional. Sender of the message; empty for messages sent to channels.
     * For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
     */
    protected User|null $from = null;

    /**
     * Optional. Sender of the message, sent on behalf of a chat.
     * For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group
     * administrators, the linked channel for messages automatically forwarded to the discussion group.
     * For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
     */
    protected Chat|null $senderChat = null;

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
    protected User|null $forwardFrom = null;

    /**
     * Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
     */
    protected Chat|null $forwardFromChat = null;

    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel
     */
    protected int|null $forwardFromMessageId = null;

    /**
     * Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator,
     * signature of the message sender if present
     */
    protected string|null $forwardSignature = null;

    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
     */
    protected string|null $forwardSenderName = null;

    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time
     */
    protected int|null $forwardDate = null;

    /**
     * Optional. True, if the message is sent to a forum topic
     */
    protected bool|null $isTopicMessage = null;

    /**
     * Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
     */
    protected bool|null $isAutomaticForward = null;

    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it itself is a reply.
     */
    protected Message|null $replyToMessage = null;

    /**
     * Optional. Bot through which the message was sent
     */
    protected User|null $viaBot = null;

    /**
     * Optional. Date the message was last edited in Unix time
     */
    protected int|null $editDate = null;

    /**
     * Optional. True, if the message can't be forwarded
     */
    protected bool|null $hasProtectedContent = null;

    /**
     * Optional. The unique identifier of a media message group this message belongs to
     */
    protected string|null $mediaGroupId = null;

    /**
     * Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     */
    protected string|null $authorSignature = null;

    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     */
    protected string|null $text = null;

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @var MessageEntity[]
     */
    protected array|null $entities = null;

    /**
     * Optional. Message is an animation, information about the animation.
     * For backward compatibility, when this field is set, the document field will also be set
     */
    protected Animation|null $animation = null;

    /**
     * Optional. Message is an audio file, information about the file
     */
    protected Audio|null $audio = null;

    /**
     * Optional. Message is a general file, information about the file
     */
    protected Document|null $document = null;

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @var PhotoSize[]
     */
    protected array|null $photo = null;

    /**
     * Optional. Message is a sticker, information about the sticker
     */
    protected Sticker|null $sticker = null;

    /**
     * Optional. Message is a video, information about the video
     */
    protected Video|null $video = null;

    /**
     * Optional. Message is a video note, information about the video message
     */
    protected VideoNote|null $videoNote = null;

    /**
     * Optional. Message is a voice message, information about the file
     */
    protected Voice|null $voice = null;

    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     */
    protected string|null $caption = null;

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     *
     * @var MessageEntity[]
     */
    protected array|null $captionEntities = null;

    /**
     * Optional. True, if the message media is covered by a spoiler animation
     */
    protected bool|null $hasMediaSpoiler = null;

    /**
     * Optional. Message is a shared contact, information about the contact
     */
    protected Contact|null $contact = null;

    /**
     * Optional. Message is a dice with random value
     */
    protected Dice|null $dice = null;

    /**
     * Optional. Message is a game, information about the game.
     */
    protected Game|null $game = null;

    /**
     * Optional. Message is a native poll, information about the poll
     */
    protected Poll|null $poll = null;

    /**
     * Optional. Message is a venue, information about the venue.
     * For backward compatibility, when this field is set, the location field will also be set
     */
    protected Venue|null $venue = null;

    /**
     * Optional. Message is a shared location, information about the location
     */
    protected Location|null $location = null;

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     *
     * @var User[]
     */
    protected array|null $newChatMembers = null;

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     */
    protected User|null $leftChatMember = null;

    /**
     * Optional. A chat title was changed to this value
     */
    protected string|null $newChatTitle = null;

    /**
     * Optional. A chat photo was change to this value
     *
     * @var PhotoSize[]
     */
    protected array|null $newChatPhoto = null;

    /**
     * Optional. Service message: the chat photo was deleted
     */
    protected bool|null $deleteChatPhoto = null;

    /**
     * Optional. Service message: the group has been created
     */
    protected bool|null $groupChatCreated = null;

    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message coming through
     * updates, because bot can't be a member of a supergroup when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    protected bool|null $supergroupChatCreated = null;

    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming through
     * updates, because bot can't be a member of a channel when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    protected bool|null $channelChatCreated = null;

    /**
     * Optional. Service message: auto-delete timer settings changed in the chat
     */
    protected MessageAutoDeleteTimerChanged|null $messageAutoDeleteTimerChanged = null;

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    protected int|null $migrateToChatId = null;

    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    protected int|null $migrateFromChatId = null;

    /**
     * Optional. Specified message was pinned.
     * Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     */
    protected Message|null $pinnedMessage = null;

    /**
     * Optional. Message is an invoice for a payment, information about the invoice.
     */
    protected Invoice|null $invoice = null;

    /**
     * Optional. Message is a service message about a successful payment, information about the payment.
     */
    protected SuccessfulPayment|null $successfulPayment = null;

    /**
     * Optional. Service message: a user was shared with the bot
     */
    protected UserShared|null $userShared = null;

    /**
     * Optional. Service message: a chat was shared with the bot
     */
    protected ChatShared|null $chatShared = null;

    /**
     * Optional. The domain name of the website on which the user has logged in.
     */
    protected string|null $connectedWebsite = null;

    /**
     * Optional. Service message: the user allowed the bot added to the attachment menu to write messages
     */
    protected WriteAccessAllowed|null $writeAccessAllowed = null;

    /**
     * Optional. Telegram Passport data
     */
    protected PassportData|null $passportData = null;

    /**
     * Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     */
    protected ProximityAlertTriggered|null $proximityAlertTriggered = null;

    /**
     * Optional. Service message: forum topic created
     */
    protected ForumTopicCreated|null $forumTopicCreated = null;

    /**
     * Optional. Service message: forum topic edited
     */
    protected ForumTopicEdited|null $forumTopicEdited = null;

    /**
     * Optional. Service message: forum topic closed
     */
    protected ForumTopicClosed|null $forumTopicClosed = null;

    /**
     * Optional. Service message: forum topic reopened
     */
    protected ForumTopicReopened|null $forumTopicReopened = null;

    /**
     * Optional. Service message: the 'General' forum topic hidden
     */
    protected GeneralForumTopicHidden|null $generalForumTopicHidden = null;

    /**
     * Optional. Service message: the 'General' forum topic unhidden
     */
    protected GeneralForumTopicUnhidden|null $generalForumTopicUnhidden = null;

    /**
     * Optional. Service message: video chat scheduled
     */
    protected VideoChatScheduled|null $videoChatScheduled = null;

    /**
     * Optional. Service message: video chat started
     */
    protected VideoChatStarted|null $videoChatStarted = null;

    /**
     * Optional. Service message: video chat ended
     */
    protected VideoChatEnded|null $videoChatEnded = null;

    /**
     * Optional. Service message: new participants invited to a video chat
     */
    protected VideoChatParticipantsInvited|null $videoChatParticipantsInvited = null;

    /**
     * Optional. Service message: data sent by a Web App
     */
    protected WebAppData|null $webAppData = null;

    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getMessageThreadId(): bool|null
    {
        return $this->messageThreadId;
    }

    public function getFrom(): User|null
    {
        return $this->from;
    }

    public function getSenderChat(): Chat|null
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

    public function getForwardFrom(): User|null
    {
        return $this->forwardFrom;
    }

    public function getForwardFromChat(): Chat|null
    {
        return $this->forwardFromChat;
    }

    public function getForwardFromMessageId(): int|null
    {
        return $this->forwardFromMessageId;
    }

    public function getForwardSignature(): string|null
    {
        return $this->forwardSignature;
    }

    public function getForwardSenderName(): string|null
    {
        return $this->forwardSenderName;
    }

    public function getForwardDate(): int|null
    {
        return $this->forwardDate;
    }

    public function isTopicMessage(): bool|null
    {
        return $this->isTopicMessage;
    }

    public function isAutomaticForward(): bool|null
    {
        return $this->isAutomaticForward;
    }

    public function getReplyToMessage(): Message|null
    {
        return $this->replyToMessage;
    }

    public function getViaBot(): User|null
    {
        return $this->viaBot;
    }

    public function getEditDate(): int|null
    {
        return $this->editDate;
    }

    public function hasProtectedContent(): bool|null
    {
        return $this->hasProtectedContent;
    }

    public function getMediaGroupId(): string|null
    {
        return $this->mediaGroupId;
    }

    public function getAuthorSignature(): string|null
    {
        return $this->authorSignature;
    }

    public function getText(): string|null
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): array|null
    {
        return $this->entities;
    }

    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    public function getAudio(): Audio|null
    {
        return $this->audio;
    }

    public function getDocument(): Document|null
    {
        return $this->document;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getPhoto(): array|null
    {
        return $this->photo;
    }

    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    public function getVideo(): Video|null
    {
        return $this->video;
    }

    public function getVideoNote(): VideoNote|null
    {
        return $this->videoNote;
    }

    public function getVoice(): Voice|null
    {
        return $this->voice;
    }

    public function getCaption(): string|null
    {
        return $this->caption;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): array|null
    {
        return $this->captionEntities;
    }

    public function hasMediaSpoiler(): bool|null
    {
        return $this->hasMediaSpoiler;
    }

    public function getContact(): Contact|null
    {
        return $this->contact;
    }

    public function getDice(): Dice|null
    {
        return $this->dice;
    }

    public function getGame(): Game|null
    {
        return $this->game;
    }

    public function getPoll(): Poll|null
    {
        return $this->poll;
    }

    public function getVenue(): Venue|null
    {
        return $this->venue;
    }

    public function getLocation(): Location|null
    {
        return $this->location;
    }

    /**
     * @return User[]|null
     */
    public function getNewChatMembers(): array|null
    {
        return $this->newChatMembers;
    }

    public function getLeftChatMember(): User|null
    {
        return $this->leftChatMember;
    }

    public function getNewChatTitle(): string|null
    {
        return $this->newChatTitle;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getNewChatPhoto(): array|null
    {
        return $this->newChatPhoto;
    }

    public function isDeleteChatPhoto(): bool|null
    {
        return $this->deleteChatPhoto;
    }

    public function isGroupChatCreated(): bool|null
    {
        return $this->groupChatCreated;
    }

    public function isSupergroupChatCreated(): bool|null
    {
        return $this->supergroupChatCreated;
    }

    public function isChannelChatCreated(): bool|null
    {
        return $this->channelChatCreated;
    }

    public function getMessageAutoDeleteTimerChanged(): MessageAutoDeleteTimerChanged|null
    {
        return $this->messageAutoDeleteTimerChanged;
    }

    public function getMigrateToChatId(): int|null
    {
        return $this->migrateToChatId;
    }

    public function getMigrateFromChatId(): int|null
    {
        return $this->migrateFromChatId;
    }

    public function getPinnedMessage(): Message|null
    {
        return $this->pinnedMessage;
    }

    public function getInvoice(): Invoice|null
    {
        return $this->invoice;
    }

    public function getSuccessfulPayment(): SuccessfulPayment|null
    {
        return $this->successfulPayment;
    }

    public function getUserShared(): UserShared|null
    {
        return $this->userShared;
    }

    public function getChatShared(): ChatShared|null
    {
        return $this->chatShared;
    }

    public function getConnectedWebsite(): string|null
    {
        return $this->connectedWebsite;
    }

    public function getWriteAccessAllowed(): WriteAccessAllowed|null
    {
        return $this->writeAccessAllowed;
    }

    public function getPassportData(): PassportData|null
    {
        return $this->passportData;
    }

    public function getProximityAlertTriggered(): ProximityAlertTriggered|null
    {
        return $this->proximityAlertTriggered;
    }

    public function getForumTopicCreated(): ForumTopicCreated|null
    {
        return $this->forumTopicCreated;
    }

    public function getForumTopicEdited(): ForumTopicEdited|null
    {
        return $this->forumTopicEdited;
    }

    public function getForumTopicClosed(): ForumTopicClosed|null
    {
        return $this->forumTopicClosed;
    }

    public function getForumTopicReopened(): ForumTopicReopened|null
    {
        return $this->forumTopicReopened;
    }

    public function getGeneralForumTopicHidden(): GeneralForumTopicHidden|null
    {
        return $this->generalForumTopicHidden;
    }

    public function getGeneralForumTopicUnhidden(): GeneralForumTopicUnhidden|null
    {
        return $this->generalForumTopicUnhidden;
    }

    public function getVideoChatScheduled(): VideoChatScheduled|null
    {
        return $this->videoChatScheduled;
    }

    public function getVideoChatStarted(): VideoChatStarted|null
    {
        return $this->videoChatStarted;
    }

    public function getVideoChatEnded(): VideoChatEnded|null
    {
        return $this->videoChatEnded;
    }

    public function getVideoChatParticipantsInvited(): VideoChatParticipantsInvited|null
    {
        return $this->videoChatParticipantsInvited;
    }

    public function getWebAppData(): WebAppData|null
    {
        return $this->webAppData;
    }

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }
}
