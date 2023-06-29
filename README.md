# PHP Wrapper for Telegram Bot API

[![Bot Api 6.7](https://img.shields.io/badge/Bot%20API-6.7-0088cc.svg?style=flat)](https://core.telegram.org/bots/api-changelog#april-21-2023)
[![PHP ^8.2](https://img.shields.io/badge/PHP-^8.2-777bb3.svg?style=flat)](https://www.php.net/releases/8.2/en.php)
[![Tests Status](https://img.shields.io/github/actions/workflow/status/luzrain/telegram-bot-api/tests.yaml?branch=master)](../../actions/workflows/tests.yaml)

A lightweight object-oriented PHP wrapper for the [Telegram Bot API](https://core.telegram.org/bots/api) with full support for all the telegram methods and types.  
See all available methods and their parameters on the [Telegram Bot API](https://core.telegram.org/bots/api#available-methods) documentation page.

## Installation
``` bash
$ composer require luzrain/telegram-bot-api
```

## Bot API
The Telegram Bot Client is not hard coupled to Guzzle or any other library that sends HTTP messages.
Instead, it uses the [PSR-18](https://www.php-fig.org/psr/psr-18/) client abstraction.
This will give you the flexibility to choose what [PSR-7 implementation](https://packagist.org/providers/psr/http-message-implementation) and [HTTP client](https://packagist.org/providers/psr/http-client-implementation) you want to use.

#### Example of initialising the BotApi with Guzzle client
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

#### Send message
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

#### Send message with reply keyboard

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

#### Send message with inline keyboard

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

#### Send media group

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
#### Webhook client

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
$client->on(new Event\Message(function(Type\Message $message) {
    return new Method\SendMessage(
        chatId: $message->chat->id,
        text: 'Your message: ' . $message->text,
    );
}));

$client->run();
```
