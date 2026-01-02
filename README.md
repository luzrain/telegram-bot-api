# Telegram Bot API Client for PHP

[![Bot Api 9.3](https://img.shields.io/badge/Bot%20API-9.3-0088cc.svg?style=flat)](https://core.telegram.org/bots/api-changelog#december-31-2025)
![PHP >=8.2](https://img.shields.io/badge/PHP->=8.2-777bb3.svg?style=flat)
![Tests Status](https://img.shields.io/github/actions/workflow/status/luzrain/telegram-bot-api/tests.yaml?branch=master&label=Tests)
![Downloads](https://img.shields.io/packagist/dt/luzrain/telegram-bot-api?label=Downloads&color=f28d1a)

A lightweight, object-oriented PHP wrapper for the [Telegram Bot API](https://core.telegram.org/bots/api), with full support for all available methods and types.
For details on each method and its parameters, refer to the official [Telegram Bot API documentation](https://core.telegram.org/bots/api#available-methods).

## Installation
``` bash
$ composer require luzrain/telegram-bot-api
```

## Bot API
The Telegram Bot Client is not tied to Guzzle or any specific HTTP client.  
It relies on the [PSR-18](https://www.php-fig.org/psr/psr-18/) HTTP client and [PSR-17](https://www.php-fig.org/psr/psr-17/) HTTP Factories abstractions.

> [!NOTE]  
> Using named parameters is recommended, since parameter order and counts can vary between releases.

#### Example Initializing the BotApi with Guzzle HTTP Client
```php
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;
use Luzrain\TelegramBotApi\BotApi;

$httpFactory = new HttpFactory();
$httpClient = new Client(['http_errors' => false]);

$bot = new BotApi(
    requestFactory: $httpFactory,
    streamFactory: $httpFactory,
    client: $httpClient,
    token: 'API_TOKEN',
);
```

#### Send Message
```php
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

/**
 * @var Type\Message $response
 */
$response = $bot->call(new Method\SendMessage(
    chatId: 123456789,
    text: 'Example text',
));
```

#### Send Message with Reply Keyboard

```php
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

$replyKeyboard = new Type\ReplyKeyboardMarkup(
    oneTimeKeyboard: true,
    resizeKeyboard: true,
    keyboard: Type\KeyboardButtonArrayBuilder::create()
        ->addButton(new Type\KeyboardButton(text: 'Button 1'))
        ->addButton(new Type\KeyboardButton(text: 'Button 2'))
        ->addBreak()
        ->addButton(new Type\KeyboardButton(text: 'Web App', webApp: new Type\WebAppInfo('https://github.com/')))
        ->addButton(new Type\KeyboardButton(text: 'Create Poll', requestPoll: new Type\KeyboardButtonPollType())),
);

// For keyboard remove
// $replyKeyboard = new Type\ReplyKeyboardRemove();

/**
 * @var Type\Message $response
 */
$response = $bot->call(new Method\SendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $replyKeyboard,
));
```

#### Send Message with Inline Keyboard

```php
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

$inlineKeyboard = new Type\InlineKeyboardMarkup(
    inlineKeyboard: Type\InlineKeyboardButtonArrayBuilder::create()
        ->addButton(new Type\InlineKeyboardButton(text: 'Url button', url: 'https://google.com'))
        ->addButton(new Type\InlineKeyboardButton(text: 'Callback button', callbackData: 'callback_data'))
        ->addBreak()
        ->addButton(new Type\InlineKeyboardButton(text: 'Iinline query', switchInlineQueryCurrentChat: 'test')),
);

/**
 * @var Type\Message $response
 */
$response = $bot->call(new Method\SendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $inlineKeyboard ,
));
```

#### Send photo/video/document

```php
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

/**
 * Upload image from local filesystem
 * @var Type\Message $response
 */
$response = $bot->call(new Method\SendPhoto(
    chatId: 123456789,
    photo: new Type\InputFile('/home/user/img/15311661465960.jpg'),
));

/**
 * Send image from the Internet
 * @var Type\Message $response
 */
$response = $bot->call(new Method\SendPhoto(
    chatId: 123456789,
    photo: 'https://avatars3.githubusercontent.com/u/9335727',
));

/**
 * Upload Document
 * @var Type\Message $response
 */
$response = $bot->call(new Method\SendDocument(
    chatId: 123456789,
    document: new Type\InputFile('/home/user/files/file.zip'),
    thumbnail: new Type\InputFile('/home/user/img/thumb.jpg'),
    caption: 'Test file',
));

/**
 * You can also use these methods:
 * SendPhoto, SendAudio, SendDocument, SendVideo, SendAnimation, SendVoice, SendVideoNote
 */
```

#### Send Media Group

```php
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

/**
 * @var Type\Message[] $response
 */
$response = $bot->call(new Method\SendMediaGroup(
    chatId: 123456789,
    media: [
        new Type\InputMediaPhoto(
            media: new Type\InputFile('/home/user/img/15311661465960.jpg'),
            caption: 'Test media 1',
        ),
        new Type\InputMediaPhoto(
            media: new Type\InputFile('/home/user/img/16176321866250.png'),
            caption: 'Test media 2',
        ),
    ],
));
```

## Client Api
#### Webhook Client

```php
use Luzrain\TelegramBotApi\ClientApi;
use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type;

$client = new ClientApi();

// Handle any type of update
$client->on(new Event\Update(function(Type\Update $update) {
    // Any update received
}));

// Handle /ping command
$client->on(new Event\Command('/ping', function(Type\Message $message) {
    /**
     * You can return any Method object from here, and it will be sent as an answer to the webhook.
     * Be aware that your cannot send methods with uploading local files from here, use BotApi instead.
     */
    return new Method\SendMessage(
        chatId: $message->chat->id,
        text: 'pong!',
    );
}));

// Handle text messages
$client->on(new Event\TextMessage(function(Type\Message $message) {
    return new Method\SendMessage(
        chatId: $message->chat->id,
        text: 'Your message: ' . $message->text,
    );
}));

$client->run();
```
