<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;
use PHPUnit\Framework\TestCase;

final class MethodResponseTest extends TestCase
{
    public function testArrayResponse(): void
    {
        // Arrange
        $rawResponse = \json_decode(\file_get_contents(__DIR__ . '/data/response/sendMediaGroupAnswer.json'), true);
        $method = new Method\SendMediaGroup(
            chatId: '197312345',
            media: [
                new Type\InputMediaPhoto(
                    media: new Type\InputFile(__FILE__),
                    caption: 'Test media 1',
                ),
                new Type\InputMediaPhoto(
                    media: new Type\InputFile(__FILE__),
                    caption: 'Test media 2',
                ),
            ],
        );

        // Act
        /** @var list<Type\Message> $response */
        $response = $method->createResponse($rawResponse);

        //Assert
        $this->assertIsArray($response);
        $this->assertCount(2, $response);
        $this->assertInstanceOf(Type\Message::class, $response[0]);
        $this->assertSame(2283, $response[0]->messageId);
        $this->assertInstanceOf(Type\User::class, $response[0]->from);
        $this->assertSame(6133767202, $response[0]->from->id);
        $this->assertInstanceOf(Type\Chat::class, $response[0]->chat);
        $this->assertSame(14612111, $response[0]->chat->id);
        $this->assertSame(1709038386, $response[0]->date);
        $this->assertSame('13672307089347146', $response[0]->mediaGroupId);
        $this->assertSame('Test media 1', $response[0]->caption);
        $this->assertCount(5, $response[0]->photo);
        $this->assertSame('AgACAgIAAxkDAAII62Xd2zLT3h2Ixf6qQJqQAco5d3zuAAJo1DEbLyvwSjGyuLfEPPDYAQADAgADcwADNAQ', $response[0]->photo[0]->fileId);
        $this->assertSame('AQADaNQxGy8r8Ep4', $response[0]->photo[0]->fileUniqueId);
        $this->assertSame(1137, $response[0]->photo[0]->fileSize);
        $this->assertSame(53, $response[0]->photo[0]->width);
        $this->assertSame(90, $response[0]->photo[0]->height);
    }

    public function testObjectResponse(): void
    {
        // Arrange
        $rawResponse = \json_decode(\file_get_contents(__DIR__ . '/data/response/getMeAnswer.json'), true);
        $method = new Method\GetMe();

        // Act
        /** @var Type\User $response */
        $response = $method->createResponse($rawResponse);

        //Assert
        $this->assertInstanceOf(Type\User::class, $response);
        $this->assertSame(6133711111, $response->id);
        $this->assertSame(true, $response->isBot);
        $this->assertSame('TelegramApiTest', $response->firstName);
        $this->assertSame('Test992348993Bot', $response->username);
        $this->assertSame(true, $response->canJoinGroups);
        $this->assertSame(false, $response->canReadAllGroupMessages);
        $this->assertSame(false, $response->supportsInlineQueries);
    }

    public function testScalarResponse(): void
    {
        // Arrange
        $rawResponse = \json_decode(\file_get_contents(__DIR__ . '/data/response/deleteMessageAnswer.json'), true);
        $method = new Method\BanChatMember(
            chatId: 1234,
            userId: 1234,
        );

        // Act
        /** @var true $response */
        $response = $method->createResponse($rawResponse);

        //Assert
        $this->assertTrue($response);
    }
}
