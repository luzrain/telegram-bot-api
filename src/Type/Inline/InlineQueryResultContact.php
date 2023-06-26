<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
final readonly class InlineQueryResultContact extends BaseType implements InlineQueryResult
{
    /**
     * Type of the result, must be contact
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 Bytes
         */
        public string $id,

        /**
         * Contact's phone number
         */
        public string $phoneNumber,

        /**
         * Contact's first name
         */
        public string $firstName,

        /**
         * Optional. Contact's last name
         */
        public string|null $lastName = null,

        /**
         * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
         */
        public string|null $vcard = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the contact
         */
        public InputMessageContent|null $inputMessageContent = null,

        /**
         * Optional. Url of the thumbnail for the result
         */
        public string|null $thumbnailUrl = null,

        /**
         * Optional. Thumbnail width
         */
        public int|null $thumbnailWidth = null,

        /**
         * Optional. Thumbnail height
         */
        public int|null $thumbnailHeight = null,
    ) {
        $this->type = 'contact';
    }
}
