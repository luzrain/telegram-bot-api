<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ForceReply;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\InputPollMedia;
use Luzrain\TelegramBotApi\Type\InputPollOption;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\MessageEntity;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;
use Luzrain\TelegramBotApi\Type\ReplyParameters;

/**
 * Use this method to send a native poll. On success, the sent Message is returned.
 *
 * @extends Method<Message>
 */
final class SendPoll extends Method
{
    public const QUIZ_TYPE = 'quiz';
    public const REGULAR_TYPE = 'regular';

    protected static string $methodName = 'sendPoll';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target bot, supergroup or channel in the format @username. Polls can't be sent to channel direct messages chats.
         */
        protected int|string $chatId,

        /**
         * Poll question, 1-300 characters
         */
        protected string $question,

        /**
         * A JSON-serialized list of 1-12 answer options
         *
         * @var list<InputPollOption>
         */
        protected array $options,

        /**
         * Unique identifier of the business connection on behalf of which the message will be sent
         */
        protected string|null $businessConnectionId = null,

        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
         */
        protected int|null $messageThreadId = null,

        /**
         * Mode for parsing entities in the question. See formatting options for more details. Currently, only custom emoji entities are allowed
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        protected string|null $questionParseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of question_parse_mode
         *
         * @var list<MessageEntity>|null
         */
        protected array|null $questionEntities = null,

        /**
         * True, if the poll needs to be anonymous, defaults to True
         */
        protected bool|null $isAnonymous = null,

        /**
         * Poll type, "quiz" or "regular", defaults to "regular"
         */
        protected string|null $type = null,

        /**
         * Pass True, if the poll allows multiple answers, defaults to False
         */
        protected bool|null $allowsMultipleAnswers = null,

        /**
         * Pass True, if the poll allows to change chosen answer options, defaults to False for quizzes and to True for regular polls
         */
        protected bool|null $allowsRevoting = null,

        /**
         * Pass True, if the poll options must be shown in random order
         */
        protected bool|null $shuffleOptions = null,

        /**
         * Pass True, if answer options can be added to the poll after creation; not supported for anonymous polls and quizzes
         */
        protected bool|null $allowAddingOptions = null,

        /**
         * Pass True, if poll results must be shown only after the poll closes
         */
        protected bool|null $hideResultsUntilCloses = null,

        /**
         * Pass True, if voting is limited to users who have been members of the chat where the poll is being sent for more than 24 hours; for channel chats only
         */
        protected bool|null $membersOnly = null,

        /**
         * A JSON-serialized list of 0-12 two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which users can vote in the poll;
         * for channel chats only. Use "FT" as a country code to allow users with anonymous numbers to vote.
         * If omitted or empty, then users from any country can participate in the poll.
         *
         * @var list<string>|null
         */
        protected array|null $countryCodes = null,

        /**
         * @deprecated replaced by $correctOptionIds
         */
        protected int|null $correctOptionId = null,

        /**
         * A JSON-serialized list of monotonically increasing 0-based identifiers of the correct answer options, required for polls in quiz mode
         *
         * @var list<int>|null
         */
        protected array|null $correctOptionIds = null,

        /**
         * Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll,
         * 0-200 characters with at most 2 line feeds after entities parsing
         */
        protected string|null $explanation = null,

        /**
         * Mode for parsing entities in the explanation. See formatting options for more details.
         */
        protected string|null $explanationParseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of explanation_parse_mode.
         *
         * @var list<MessageEntity>|null
         */
        protected array|null $explanationEntities = null,

        /**
         * Media added to the quiz explanation
         */
        protected InputPollMedia|null $explanationMedia = null,

        /**
         * Amount of time in seconds the poll will be active after creation, 5-2628000. Can't be used together with close_date.
         */
        protected int|null $openPeriod = null,

        /**
         * Point in time (Unix timestamp) when the poll will be automatically closed.
         * Must be at least 5 and no more than 2628000 seconds in the future. Can't be used together with open_period.
         */
        protected int|null $closeDate = null,

        /**
         * Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
         */
        protected bool|null $isClosed = null,

        /**
         * Description of the poll to be sent, 0-1024 characters after entities parsing
         */
        protected string|null $description = null,

        /**
         * Mode for parsing entities in the poll description. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        protected string|null $descriptionParseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the poll description, which can be specified instead of description_parse_mode
         *
         * @var list<MessageEntity>|null
         */
        protected array|null $descriptionEntities = null,

        /**
         * Media added to the poll description
         */
        protected InputPollMedia|null $media = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message.
         * The relevant Stars will be withdrawn from the bot's balance.
         */
        protected bool|null $allowPaidBroadcast = null,

        /**
         * Unique identifier of the message effect to be added to the message; for private chats only
         */
        protected string|null $messageEffectId = null,

        /**
         * Description of the message to reply to
         */
        protected ReplyParameters|null $replyParameters = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
         * instructions to remove a reply keyboard or to force a reply from the user.
         * Not supported for messages sent on behalf of a business account.
         */
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
    }
}
