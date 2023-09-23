<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ForceReply;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\MessageEntity;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;

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
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Poll question, 1-300 characters
         */
        protected string $question,

        /**
         * A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
         * Array of String
         */
        protected array $options,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * True, if the poll needs to be anonymous, defaults to True
         */
        protected bool|null $isAnonymous = null,

        /**
         * Poll type, “quiz” or “regular”, defaults to “regular”
         */
        protected string|null $type = null,

        /**
         * True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
         */
        protected bool|null $allowsMultipleAnswers = null,

        /**
         * 0-based identifier of the correct answer option, required for polls in quiz mode
         */
        protected int|null $correctOptionId = null,

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
         * A JSON-serialized list of special entities that appear in the poll explanation, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        protected array|null $explanationEntities = null,

        /**
         * Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
         */
        protected int|null $openPeriod = null,

        /**
         * Point in time (Unix timestamp) when the poll will be automatically closed.
         * Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period.
         */
        protected int|null $closeDate = null,

        /**
         * Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
         */
        protected bool|null $isClosed = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * If the message is a reply, ID of the original message
         */
        protected int|null $replyToMessageId = null,

        /**
         * Pass True if the message should be sent even if the specified replied-to message is not found
         */
        protected bool|null $allowSendingWithoutReply = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
         * instructions to remove reply keyboard or to force a reply from the user.
         */
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
    }
}
