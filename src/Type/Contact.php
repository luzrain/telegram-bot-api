<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a phone contact.
 */
final readonly class Contact extends Type
{
    protected function __construct(
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
        public string $lastName,

        /**
         * Optional. Contact's user identifier in Telegram
         */
        public int|null $userId = null,

        /**
         * Optional. Additional data about the contact in the form of a vCard
         */
        public string|null $vcard = null,
    ) {
    }
}
