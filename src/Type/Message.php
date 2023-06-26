<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntityType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfPhotoSizeType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfUserType;
use Luzrain\TelegramBotApi\Type\Games\Game;
use Luzrain\TelegramBotApi\Type\Passport\PassportData;
use Luzrain\TelegramBotApi\Type\Payments\Invoice;
use Luzrain\TelegramBotApi\Type\Payments\SuccessfulPayment;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a message.
 */
final readonly class Message extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Unique message identifier inside this chat
         */
        public int $messageId,

        /**
         * Date the message was sent in Unix time
         */
        public int $date,

        /**
         * Conversation the message belongs to
         */
        public Chat $chat,

        /**
         * Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
         */
        public int|null $messageThreadId = null,

        /**
         * Optional. Sender of the message; empty for messages sent to channels.
         * For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
         */
        public User|null $from = null,

        /**
         * Optional. Sender of the message, sent on behalf of a chat.
         * For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group
         * administrators, the linked channel for messages automatically forwarded to the discussion group.
         * For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
         */
        public Chat|null $senderChat = null,

        /**
         * Optional. For forwarded messages, sender of the original message
         */
        public User|null $forwardFrom = null,

        /**
         * Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
         */
        public Chat|null $forwardFromChat = null,

        /**
         * Optional. For messages forwarded from channels, identifier of the original message in the channel
         */
        public int|null $forwardFromMessageId = null,

        /**
         * Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator,
         * signature of the message sender if present
         */
        public string|null $forwardSignature = null,

        /**
         * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
         */
        public string|null $forwardSenderName = null,

        /**
         * Optional. For forwarded messages, date the original message was sent in Unix time
         */
        public int|null $forwardDate = null,

        /**
         * Optional. True, if the message is sent to a forum topic
         */
        public true|null $isTopicMessage = null,

        /**
         * Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
         */
        public true|null $isAutomaticForward = null,

        /**
         * Optional. For replies, the original message. Note that the Message object in this field will not contain further
         * reply_to_message fields even if it itself is a reply.
         */
        public Message|null $replyToMessage = null,

        /**
         * Optional. Bot through which the message was sent
         */
        public User|null $viaBot = null,

        /**
         * Optional. Date the message was last edited in Unix time
         */
        public int|null $editDate = null,

        /**
         * Optional. True, if the message can't be forwarded
         */
        public true|null $hasProtectedContent = null,

        /**
         * Optional. The unique identifier of a media message group this message belongs to
         */
        public string|null $mediaGroupId = null,

        /**
         * Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
         */
        public string|null $authorSignature = null,

        /**
         * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
         */
        public string|null $text = null,

        /**
         * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
         *
         * @var list<MessageEntity>|null
         */
        #[PropertyType(ArrayOfMessageEntityType::class)]
        public array|null $entities = null,

        /**
         * Optional. Message is an animation, information about the animation.
         * For backward compatibility, when this field is set, the document field will also be set
         */
        public Animation|null $animation = null,

        /**
         * Optional. Message is an audio file, information about the file
         */
        public Audio|null $audio = null,

        /**
         * Optional. Message is a general file, information about the file
         */
        public Document|null $document = null,

        /**
         * Optional. Message is a photo, available sizes of the photo
         *
         * @var list<PhotoSize>|null
         */
        #[PropertyType(ArrayOfPhotoSizeType::class)]
        public array|null $photo = null,

        /**
         * Optional. Message is a sticker, information about the sticker
         */
        public Sticker|null $sticker = null,

        /**
         * Optional. Message is a video, information about the video
         */
        public Video|null $video = null,

        /**
         * Optional. Message is a video note, information about the video message
         */
        public VideoNote|null $videoNote = null,

        /**
         * Optional. Message is a voice message, information about the file
         */
        public Voice|null $voice = null,

        /**
         * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
         */
        public string|null $caption = null,

        /**
         * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
         *
         * @var list<MessageEntity>|null
         */
        #[PropertyType(ArrayOfMessageEntityType::class)]
        public array|null $captionEntities = null,

        /**
         * Optional. True, if the message media is covered by a spoiler animation
         */
        public true|null $hasMediaSpoiler = null,

        /**
         * Optional. Message is a shared contact, information about the contact
         */
        public Contact|null $contact = null,

        /**
         * Optional. Message is a dice with random value
         */
        public Dice|null $dice = null,

        /**
         * Optional. Message is a game, information about the game.
         */
        public Game|null $game = null,

        /**
         * Optional. Message is a native poll, information about the poll
         */
        public Poll|null $poll = null,

        /**
         * Optional. Message is a venue, information about the venue.
         * For backward compatibility, when this field is set, the location field will also be set
         */
        public Venue|null $venue = null,

        /**
         * Optional. Message is a shared location, information about the location
         */
        public Location|null $location = null,

        /**
         * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
         *
         * @var list<User>|null
         */
        #[PropertyType(ArrayOfUserType::class)]
        public array|null $newChatMembers = null,

        /**
         * Optional. A member was removed from the group, information about them (this member may be the bot itself)
         */
        public User|null $leftChatMember = null,

        /**
         * Optional. A chat title was changed to this value
         */
        public string|null $newChatTitle = null,

        /**
         * Optional. A chat photo was change to this value
         *
         * @var list<PhotoSize>|null
         */
        #[PropertyType(ArrayOfPhotoSizeType::class)]
        public array|null $newChatPhoto = null,

        /**
         * Optional. Service message: the chat photo was deleted
         */
        public true|null $deleteChatPhoto = null,

        /**
         * Optional. Service message: the group has been created
         */
        public true|null $groupChatCreated = null,

        /**
         * Optional. Service message: the supergroup has been created. This field can't be received in a message coming through
         * updates, because bot can't be a member of a supergroup when it is created.
         * It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
         */
        public true|null $supergroupChatCreated = null,

        /**
         * Optional. Service message: the channel has been created. This field can't be received in a message coming through
         * updates, because bot can't be a member of a channel when it is created.
         * It can only be found in reply_to_message if someone replies to a very first message in a channel.
         */
        public true|null $channelChatCreated = null,

        /**
         * Optional. Service message: auto-delete timer settings changed in the chat
         */
        public MessageAutoDeleteTimerChanged|null $messageAutoDeleteTimerChanged = null,

        /**
         * Optional. The group has been migrated to a supergroup with the specified identifier.
         * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
         * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public int|null $migrateToChatId = null,

        /**
         * Optional. The supergroup has been migrated from a group with the specified identifier.
         * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
         * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public int|null $migrateFromChatId = null,

        /**
         * Optional. Specified message was pinned.
         * Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
         */
        public Message|null $pinnedMessage = null,

        /**
         * Optional. Message is an invoice for a payment, information about the invoice.
         */
        public Invoice|null $invoice = null,

        /**
         * Optional. Message is a service message about a successful payment, information about the payment.
         */
        public SuccessfulPayment|null $successfulPayment = null,

        /**
         * Optional. Service message: a user was shared with the bot
         */
        public UserShared|null $userShared = null,

        /**
         * Optional. Service message: a chat was shared with the bot
         */
        public ChatShared|null $chatShared = null,

        /**
         * Optional. The domain name of the website on which the user has logged in.
         */
        public string|null $connectedWebsite = null,

        /**
         * Optional. Service message: the user allowed the bot added to the attachment menu to write messages
         */
        public WriteAccessAllowed|null $writeAccessAllowed = null,

        /**
         * Optional. Telegram Passport data
         */
        public PassportData|null $passportData = null,

        /**
         * Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
         */
        public ProximityAlertTriggered|null $proximityAlertTriggered = null,

        /**
         * Optional. Service message: forum topic created
         */
        public ForumTopicCreated|null $forumTopicCreated = null,

        /**
         * Optional. Service message: forum topic edited
         */
        public ForumTopicEdited|null $forumTopicEdited = null,

        /**
         * Optional. Service message: forum topic closed
         */
        public ForumTopicClosed|null $forumTopicClosed = null,

        /**
         * Optional. Service message: forum topic reopened
         */
        public ForumTopicReopened|null $forumTopicReopened = null,

        /**
         * Optional. Service message: the 'General' forum topic hidden
         */
        public GeneralForumTopicHidden|null $generalForumTopicHidden = null,

        /**
         * Optional. Service message: the 'General' forum topic unhidden
         */
        public GeneralForumTopicUnhidden|null $generalForumTopicUnhidden = null,

        /**
         * Optional. Service message: video chat scheduled
         */
        public VideoChatScheduled|null $videoChatScheduled = null,

        /**
         * Optional. Service message: video chat started
         */
        public VideoChatStarted|null $videoChatStarted = null,

        /**
         * Optional. Service message: video chat ended
         */
        public VideoChatEnded|null $videoChatEnded = null,

        /**
         * Optional. Service message: new participants invited to a video chat
         */
        public VideoChatParticipantsInvited|null $videoChatParticipantsInvited = null,

        /**
         * Optional. Service message: data sent by a Web App
         */
        public WebAppData|null $webAppData = null,

        /**
         * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
