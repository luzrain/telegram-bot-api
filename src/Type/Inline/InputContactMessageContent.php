<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
final readonly class InputContactMessageContent extends Type implements InputMessageContent
{
    public function __construct(
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
         *
         * @see https://en.wikipedia.org/wiki/VCard
         */
        public string|null $vcard = null,
    ) {
    }
}
