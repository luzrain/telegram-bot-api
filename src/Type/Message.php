<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\Games\Game;
use Luzrain\TelegramBotApi\Type\Passport\PassportData;
use Luzrain\TelegramBotApi\Type\Payments\Invoice;
use Luzrain\TelegramBotApi\Type\Payments\RefundedPayment;
use Luzrain\TelegramBotApi\Type\Payments\SuccessfulPayment;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

/**
 * This object represents a message.
 */
final readonly class Message extends MaybeInaccessibleMessage
{
    protected function __construct(
        /**
         * Unique message identifier inside this chat
         */
        public int $messageId,

        /**
         * Date the message was sent in Unix time. It is always a positive number, representing a valid date.
         */
        public int $date,

        /**
         * Chat the message belongs to
         */
        public Chat $chat,

        /**
         * Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
         */
        public int|null $messageThreadId = null,

        /**
         * Optional. Information about the direct messages chat topic that contains the message
         */
        public DirectMessagesTopic|null $directMessagesTopic = null,

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
         * Optional. If the sender of the message boosted the chat, the number of boosts added by the user
         */
        public int|null $senderBoostCount = null,

        /**
         * Optional. The bot that actually sent the message on behalf of the business account.
         * Available only for outgoing messages sent on behalf of the connected business account.
         */
        public User|null $senderBusinessBot = null,

        /**
         * Optional. Unique identifier of the business connection from which the message was received.
         * If non-empty, the message belongs to a chat of the corresponding business account that is
         * independent from any potential bot chat which might share the same identifier.
         */
        public string|null $businessConnectionId = null,

        /**
         * Optional. Information about the original message for forwarded messages
         */
        public MessageOrigin|null $forwardOrigin = null,

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
         * Optional. Information about the message that is being replied to, which may come from another chat or forum topic
         */
        public ExternalReplyInfo|null $externalReply = null,

        /**
         * Optional. For replies that quote part of the original message, the quoted part of the message
         */
        public TextQuote|null $quote = null,

        /**
         * Optional. For replies to a story, the original story
         */
        public Story|null $replyToStory = null,

        /**
         * Optional. Identifier of the specific checklist task that is being replied to
         */
        public int|null $replyToChecklistTaskId = null,

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
         * Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message,
         * or as a scheduled message
         */
        public true|null $isFromOffline = null,

        /**
         * Optional. True, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited.
         */
        public true|null $isPaidPost = null,

        /**
         * Optional. The unique identifier of a media message group this message belongs to
         */
        public string|null $mediaGroupId = null,

        /**
         * Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
         */
        public string|null $authorSignature = null,

        /**
         * Optional. The number of Telegram Stars that were paid by the sender of the message to send it
         */
        public int|null $paidStarCount = null,

        /**
         * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
         */
        public string|null $text = null,

        /**
         * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $entities = null,

        /**
         * Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
         */
        public LinkPreviewOptions|null $linkPreviewOptions = null,

        /**
         * Optional. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat.
         * If the message is an approved or declined suggested post, then it can't be edited.
         */
        public SuggestedPostInfo|null $suggestedPostInfo = null,

        /**
         * Optional. Unique identifier of the message effect added to the message
         */
        public string|null $effectId = null,

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
         * Optional. Message contains paid media; information about the paid media
         */
        public PaidMediaInfo|null $paidMedia = null,

        /**
         * Optional. Message is a photo, available sizes of the photo
         *
         * @var list<PhotoSize>|null
         */
        #[ArrayType(PhotoSize::class)]
        public array|null $photo = null,

        /**
         * Optional. Message is a sticker, information about the sticker
         */
        public Sticker|null $sticker = null,

        /**
         * Optional. Message is a forwarded story
         */
        public Story|null $story = null,

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
        #[ArrayType(MessageEntity::class)]
        public array|null $captionEntities = null,

        /**
         * Optional. True, if the caption must be shown above the message media
         */
        public true|null $showCaptionAboveMedia = null,

        /**
         * Optional. True, if the message media is covered by a spoiler animation
         */
        public true|null $hasMediaSpoiler = null,

        /**
         * Optional. Message is a checklist
         */
        public Checklist|null $checklist = null,

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
         *
         * @llink https://core.telegram.org/bots/api#games
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
        #[ArrayType(User::class)]
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
        #[ArrayType(PhotoSize::class)]
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
         * Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
         */
        public MaybeInaccessibleMessage|null $pinnedMessage = null,

        /**
         * Optional. Message is an invoice for a payment, information about the invoice.
         *
         * @link https://core.telegram.org/bots/api#payments
         */
        public Invoice|null $invoice = null,

        /**
         * Optional. Message is a service message about a successful payment, information about the payment.
         */
        public SuccessfulPayment|null $successfulPayment = null,

        /**
         * Optional. Message is a service message about a refunded payment, information about the payment.
         */
        public RefundedPayment|null $refundedPayment = null,

        /**
         * Optional. Service message: users were shared with the bot
         */
        public UsersShared|null $usersShared = null,

        /**
         * Optional. Service message: a chat was shared with the bot
         */
        public ChatShared|null $chatShared = null,

        /**
         * Optional. Service message: a regular gift was sent or received
         */
        public GiftInfo|null $gift = null,

        /**
         * Optional. Service message: a unique gift was sent or received
         */
        public UniqueGiftInfo|null $uniqueGift = null,

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
         * Optional. Service message: user boosted the chat
         */
        public ChatBoostAdded|null $boostAdded = null,

        /**
         * Optional. Service message: chat background set
         */
        public ChatBackground|null $chatBackgroundSet = null,

        /**
         * Optional. Service message: some tasks in a checklist were marked as done or not done
         */
        public ChecklistTasksDone|null $checklistTasksDone = null,

        /**
         * Optional. Service message: tasks were added to a checklist
         */
        public ChecklistTasksAdded|null $checklistTasksAdded = null,

        /**
         * Optional. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
         */
        public DirectMessagePriceChanged|null $directMessagePriceChanged = null,

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
         * Optional. Service message: a scheduled giveaway was created
         */
        public GiveawayCreated|null $giveawayCreated = null,

        /**
         * Optional. The message is a scheduled giveaway message
         */
        public Giveaway|null $giveaway = null,

        /**
         * Optional. A giveaway with public winners was completed
         */
        public GiveawayWinners|null $giveawayWinners = null,

        /**
         * Optional. Service message: a giveaway without public winners was completed
         */
        public GiveawayCompleted|null $giveawayCompleted = null,

        /**
         * Optional. Service message: the price for paid messages has changed in the chat
         */
        public PaidMessagePriceChanged|null $paidMessagePriceChanged = null,

        /**
         * Optional. Service message: a suggested post was approved
         */
        public SuggestedPostApproved|null $suggestedPostApproved = null,

        /**
         * Optional. Service message: approval of a suggested post has failed
         */
        public SuggestedPostApprovalFailed|null $suggestedPostApprovalFailed = null,

        /**
         * Optional. Service message: a suggested post was declined
         */
        public SuggestedPostDeclined|null $suggestedPostDeclined = null,

        /**
         * Optional. Service message: payment for a suggested post was received
         */
        public SuggestedPostPaid|null $suggestedPostPaid = null,

        /**
         * Optional. Service message: payment for a suggested post was refunded
         */
        public SuggestedPostRefunded|null $suggestedPostRefunded = null,

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
        parent::__construct($this->date);
    }
}
