<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test;

use Luzrain\TelegramBotApi\Type\Chat;
use Luzrain\TelegramBotApi\Type\ChatMember;
use Luzrain\TelegramBotApi\Type\ChatMemberBanned;
use Luzrain\TelegramBotApi\Type\ChatMemberMember;
use Luzrain\TelegramBotApi\Type\ChatMemberUpdated;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\MessageEntity;
use Luzrain\TelegramBotApi\Type\Update;
use Luzrain\TelegramBotApi\Type\User;
use PHPUnit\Framework\TestCase;

final class UpdateTypeTest extends TestCase
{
    public function testUpdateMessage(): void
    {
        $update = Update::fromJson(\file_get_contents(__DIR__ . '/data/events/command.json'));

        $this->assertSame(264807281, $update->updateId);
        $this->assertInstanceOf(Message::class, $update->message);
        $this->assertInstanceOf(User::class, $update->message->from);
        $this->assertInstanceOf(Chat::class, $update->message->chat);
        $this->assertInstanceOf(MessageEntity::class, $update->message->entities[0]);
        $this->assertNull($update->editedMessage);
        $this->assertNull($update->channelPost);
        $this->assertNull($update->removedChatBoost);
        $this->assertSame(2163, $update->message->messageId);
        $this->assertSame(123456789, $update->message->from->id);
        $this->assertSame(false, $update->message->from->isBot);
        $this->assertSame('Anton', $update->message->from->firstName);
        $this->assertSame('User2384885921', $update->message->from->username);
        $this->assertSame('en', $update->message->from->languageCode);
        $this->assertSame(123456789, $update->message->chat->id);
        $this->assertSame('Anton', $update->message->chat->firstName);
        $this->assertSame('User2384885921', $update->message->chat->username);
        $this->assertSame('private', $update->message->chat->type);
        $this->assertSame(1651937111, $update->message->date);
        $this->assertSame('/testcommand with attrs', $update->message->text);
        $this->assertSame('bot_command', $update->message->entities[0]->type);
        $this->assertSame(0, $update->message->entities[0]->offset);
        $this->assertSame(12, $update->message->entities[0]->length);
        $this->assertSame(null, $update->message->entities[0]->url);
    }

    public function testUpdateMyChatMember(): void
    {
        $update = Update::fromJson(\file_get_contents(__DIR__ . '/data/events/botMemberBanned.json'));

        $this->assertSame(501394518, $update->updateId);
        $this->assertNull($update->message);
        $this->assertInstanceOf(ChatMemberUpdated::class, $update->myChatMember);
        $this->assertInstanceOf(Chat::class, $update->myChatMember->chat);
        $this->assertSame(123456789, $update->myChatMember->chat->id);
        $this->assertSame('Anton', $update->myChatMember->chat->firstName);
        $this->assertSame('User2384885921', $update->myChatMember->chat->username);
        $this->assertSame('private', $update->myChatMember->chat->type);
        $this->assertInstanceOf(User::class, $update->myChatMember->from);
        $this->assertSame(123456789, $update->myChatMember->from->id);
        $this->assertSame(false, $update->myChatMember->from->isBot);
        $this->assertSame('Anton', $update->myChatMember->from->firstName);
        $this->assertSame('User2384885921', $update->myChatMember->from->username);
        $this->assertSame('en', $update->myChatMember->from->languageCode);
        $this->assertSame(1687620441, $update->myChatMember->date);
        $this->assertInstanceOf(ChatMember::class, $update->myChatMember->oldChatMember);
        $this->assertInstanceOf(ChatMemberMember::class, $update->myChatMember->oldChatMember);
        $this->assertSame('member', $update->myChatMember->oldChatMember->status);
        $this->assertInstanceOf(User::class, $update->myChatMember->oldChatMember->user);
        $this->assertSame(6133767202, $update->myChatMember->oldChatMember->user->id);
        $this->assertSame(true, $update->myChatMember->oldChatMember->user->isBot);
        $this->assertSame('TelegramApiTest', $update->myChatMember->oldChatMember->user->firstName);
        $this->assertSame('Test992348993Bot', $update->myChatMember->oldChatMember->user->username);
        $this->assertInstanceOf(ChatMember::class, $update->myChatMember->newChatMember);
        $this->assertInstanceOf(ChatMemberBanned::class, $update->myChatMember->newChatMember);
        $this->assertSame('kicked', $update->myChatMember->newChatMember->status);
        $this->assertInstanceOf(User::class, $update->myChatMember->newChatMember->user);
        $this->assertSame(6133767202, $update->myChatMember->newChatMember->user->id);
        $this->assertSame(true, $update->myChatMember->newChatMember->user->isBot);
        $this->assertSame('TelegramApiTest', $update->myChatMember->newChatMember->user->firstName);
        $this->assertSame('Test992348993Bot', $update->myChatMember->newChatMember->user->username);
        $this->assertSame(0, $update->myChatMember->newChatMember->untilDate);
    }
}
