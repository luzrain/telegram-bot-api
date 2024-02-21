<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * This object describes a message that can be inaccessible to the bot. It can be one of
 *
 * @see Message
 * @see InaccessibleMessage
 *
 * @property-read int $messageId Unique message identifier inside this chat
 * @property-read int $date Date the message was sent in Unix time
 * @property-read Chat $chat Chat the message belongs to
 */
interface MaybeInaccessibleMessage
{
}
