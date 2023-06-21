
# PHP Wrapper for Telegram Bot API

[![Bot Api 6.2](https://img.shields.io/badge/Bot%20API-6.2-0088cc.svg?style=flat)](https://core.telegram.org/bots/api-changelog#april-16-2022)
[![PHP ^8.0](https://img.shields.io/badge/PHP-^8.0-777bb3.svg?style=flat)](https://www.php.net/releases/8.0/)
[![Software License](https://img.shields.io/badge/License-MIT-brightgreen.svg?style=flat)](LICENSE.md)
[![Tests Status](https://img.shields.io/github/actions/workflow/status/luzrain/telegram-bot-api/tests.yaml?branch=master)](../../actions/workflows/tests.yaml)

An extended native php wrapper for [Telegram Bot API](https://core.telegram.org/bots/api). Supports all methods and types of responses.

## Installation
``` bash
$ composer require luzrain/telegram-bot-api
```

## Bot API
See all available methods and their parameters on [Telegram Bot API](https://core.telegram.org/bots/api#available-methods) documentation page.  

A few examples of usage:

#### Send message
``` php
use TelegramBot\Api\BotApi;

$bot = new BotApi('BOT_API_TOKEN');

$response = $bot->sendMessage(
    chatId: 123456789,
    text: 'Example text',
);
```

#### Send message with reply keyboard
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\KeyboardButton;
use TelegramBot\Api\Types\KeyboardButtonPollType;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\WebAppInfo;

$bot = new BotApi('BOT_API_TOKEN');

$replyKeyboard = ReplyKeyboardMarkup::create(oneTimeKeyboard: true, resizeKeyboard: true)->addButtons(
    KeyboardButton::create(text: 'Button 1'),
    KeyboardButton::create(text: 'Button 2'),
    ReplyKeyboardMarkup::break(),
    KeyboardButton::create(text: 'Web App', webApp: WebAppInfo::create('https://github.com/')),
    KeyboardButton::create(text: 'Create Poll', requestPoll: KeyboardButtonPollType::create()),
);

$response = $bot->sendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $replyKeyboard,
);
```

#### Send message with inline keyboard
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\InlineKeyboardButton;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;

$bot = new BotApi('BOT_API_TOKEN');

$inlineKeyboard = InlineKeyboardMarkup::create()->addButtons(
    InlineKeyboardButton::create(text: 'Url button', url: 'https://google.com'),
    InlineKeyboardButton::create(text: 'Callback button', callbackData: 'callback_data'),
    InlineKeyboardMarkup::break(),
    InlineKeyboardButton::create(text: 'Iinline query', switchInlineQueryCurrentChat: 'test'),
);

// For keyboard remove
$inlineKeyboard = ReplyKeyboardRemove::create();

$response = $bot->sendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $inlineKeyboard ,
);
```

#### Send photo/video/document
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\InputFile;

$bot = new BotApi('BOT_API_TOKEN');

// Upload image from local filesystem
$response = $bot->sendPhoto(
    chatId: 123456789,
    photo: InputFile::create('/home/user/img/15311661465960.jpg'),
);

// Send image from the Internet
$response = $bot->sendPhoto(
    chatId: 123456789,
    photo: 'https://avatars3.githubusercontent.com/u/9335727',
);

// Upload Document
$response = $bot->sendDocument(
    chatId: 123456789,
    document: InputFile::create('/home/user/files/file.zip'),
    thumb: InputFile::create('/home/user/img/thumb.jpg'),
    caption: 'Test file',
);

/**
 * You can also use this methods:
 * sendPhoto, sendAudio, sendDocument, sendVideo, sendAnimation, sendVoice, sendVideoNote
 */
```

#### Send media group
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\InputFile;
use TelegramBot\Api\Types\InputMediaPhoto;

$bot = new BotApi('BOT_API_TOKEN');

$response = $bot->sendMediaGroup(
    chatId: 123456789,
    media: [
        InputMediaPhoto::create(
            media: InputFile::create('/home/user/img/15311661465960.jpg'),
            caption: 'Test media 1',
        ),
        InputMediaPhoto::create(
            media: InputFile::create('/home/user/img/16176321866250.png'),
            caption: 'Test media 2',
        ),
    ],
);
```

## Client Api
#### Webhook client

```php
use TelegramBot\Api\Client;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\Update;

$client = new Client();

// Handle any type of update
$client->onUpdate(function(Update $update) {
    // update received
});

// Handle /ping command
$client->onCommand('/ping', function(Message $message) {
    // Be aware that your cannot sent methods with uploading local files from here, use BotApi instead.
    return $client->sendMessage(
        chatId: $message->getChat()->getId(),
        text: 'pong!',
    );
});

// Handle text messages
$client->onMessage(function(Message $message) {
    return $client->sendMessage(
        chatId: $message->getChat()->getId(),
        text: 'Your message: ' . $message->getText(),
    );
});

// You can write you custom handlers by implementing Event base class
//$action = function() {};
//$event = new CustomEvent($action);
//$client->on($event);

$client->run();
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Ilya Gusev](https://github.com/iGusev)
- [All Contributors](../../contributors)

