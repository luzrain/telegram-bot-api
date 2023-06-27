
# PHP Wrapper for Telegram Bot API

[![Bot Api 6.7](https://img.shields.io/badge/Bot%20API-6.7-0088cc.svg?style=flat)](https://core.telegram.org/bots/api-changelog#april-21-2023)
[![PHP ^8.2](https://img.shields.io/badge/PHP-^8.2-777bb3.svg?style=flat)](https://www.php.net/releases/8.2/en.php)
[![Tests Status](https://img.shields.io/github/actions/workflow/status/luzrain/telegram-bot-api/tests.yaml?branch=master)](../../actions/workflows/tests.yaml)

An extended native php wrapper for [Telegram Bot API](https://core.telegram.org/bots/api). Supports all methods and types of responses.  
See all available methods and their parameters on [Telegram Bot API](https://core.telegram.org/bots/api#available-methods) documentation page.

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

$botApi = new BotApi(
    requestFactory: $httpFactory,
    streamFactory: $httpFactory,
    client: $httpClient,
    token: 'API_TOKEN',
);
```

#### Send message
```php
use Luzrain\TelegramBotApi\Method\SendMessage;
use Luzrain\TelegramBotApi\Type\Message;

/**
 * @var Message $response
 */
$response = $bot->call(new SendMessage(
    chatId: 123456789,
    text: 'Example text',
));
```

#### Send message with reply keyboard

```php
use Luzrain\TelegramBotApi\Type\KeyboardButton;
use Luzrain\TelegramBotApi\Type\KeyboardButtonArrayBuilder;
use Luzrain\TelegramBotApi\Type\KeyboardButtonPollType;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\WebAppInfo;
use Luzrain\TelegramBotApi\Method\SendMessage;

$replyKeyboard = new ReplyKeyboardMarkup(
    oneTimeKeyboard: true,
    resizeKeyboard: true,
    keyboard: KeyboardButtonArrayBuilder::create()
        ->addButton(new KeyboardButton(text: 'Button 1'))
        ->addButton(new KeyboardButton(text: 'Button 2'))
        ->addBreak()
        ->addButton(new KeyboardButton(text: 'Web App', webApp: new WebAppInfo('https://github.com/')))
        ->addButton(new KeyboardButton(text: 'Create Poll', requestPoll: new KeyboardButtonPollType()))
    ,
);

// For keyboard remove
// $replyKeyboard = new ReplyKeyboardRemove();

/**
 * @var Message $response
 */
$response = $bot->call(new SendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $replyKeyboard,
));
```

#### Send message with inline keyboard'

```php
use Luzrain\TelegramBotApi\Type\InlineKeyboardButton;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;
use Luzrain\TelegramBotApi\Method\SendMessage;

$inlineKeyboard = new InlineKeyboardMarkup(
    inlineKeyboard: InlineKeyboardButtonArrayBuilder::create()
        ->addButton(new InlineKeyboardButton(text: 'Url button', url: 'https://google.com'))
        ->addButton(new InlineKeyboardButton(text: 'Callback button', callbackData: 'callback_data'))
        ->addBreak()
        ->addButton(new InlineKeyboardButton(text: 'Iinline query', switchInlineQueryCurrentChat: 'test'))
);

/**
 * @var Message $response
 */
$response = $bot->call(new SendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $inlineKeyboard ,
));
```

#### Send photo/video/document

```php
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Method\SendPhoto;
use Luzrain\TelegramBotApi\Method\SendDocument;

/**
 * Upload image from local filesystem
 * @var Message $response
 */
$response = $bot->call(new SendPhoto(
    chatId: 123456789,
    photo: InputFile::create('/app/public/img/16848497683080.jpg'),
));

/**
 * Send image from the Internet
 * @var Message $response
 */
$response = $bot->call(new SendPhoto(
    chatId: 123456789,
    photo: 'https://avatars3.githubusercontent.com/u/9335727',
));

/**
 * Upload Document
 * @var Message $response
 */
$response = $bot->call(new SendDocument(
    chatId: 123456789,
    document: InputFile::create('/home/user/files/file.zip'),
    thumbnail: InputFile::create('/home/user/img/thumb.jpg'),
    caption: 'Test file',
));

/**
 * You can also use this methods:
 * SendPhoto, SendAudio, SendDocument, SendVideo, SendAnimation, SendVoice, SendVideoNote
 */
```

#### Send media group

```php
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Type\InputMediaPhoto;
use Luzrain\TelegramBotApi\Method\SendMediaGroup;

/**
 * @var Message[] $response
 */
$response = $bot->call(new SendMediaGroup(
    chatId: 123456789,
    media: [
        new InputMediaPhoto(
            media: InputFile::create('/home/user/img/15311661465960.jpg'),
            caption: 'Test media 1',
        ),
        new InputMediaPhoto(
            media: InputFile::create('/home/user/img/16176321866250.png'),
            caption: 'Test media 2',
        ),
    ],
));
```

## Client Api
#### Webhook client

```php
use Luzrain\TelegramBotApi\Client;
use Luzrain\TelegramBotApi\Method\SendMessage;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\Update;
use Luzrain\TelegramBotApi\Event;

$client = new Client();

// Handle any type of update
$client->on(new Event\Update(function(Update $update) {
    // update received
}));

// Handle /ping command
$client->on(new Event\Command('/ping', function(Message $message) {
    // Be aware that your cannot sent methods with uploading local files from here, use BotApi instead.
    return new SendMessage(
        chatId: $message->getChat()->getId(),
        text: 'pong!',
    );
}));

// Handle text messages
$client->on(new Event\Message(function(Message $message) {
    return new SendMessage(
        chatId: $message->getChat()->getId(),
        text: 'Your message: ' . $message->getText(),
    );
}));

$client->run();
```
