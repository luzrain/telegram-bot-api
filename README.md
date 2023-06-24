
# PHP Wrapper for Telegram Bot API

[![Bot Api 6.7](https://img.shields.io/badge/Bot%20API-6.7-0088cc.svg?style=flat)](https://core.telegram.org/bots/api-changelog#april-21-2023)
[![PHP ^8.2](https://img.shields.io/badge/PHP-^8.2-777bb3.svg?style=flat)](https://www.php.net/releases/8.2/en.php)
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
use Luzrain\TelegramBotApi\BotApi;

$bot = new BotApi('BOT_API_TOKEN');

$response = $bot->sendMessage(
    chatId: 123456789,
    text: 'Example text',
);
```

#### Send message with reply keyboard

```php
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Type\KeyboardButton;
use Luzrain\TelegramBotApi\Type\KeyboardButtonPollType;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\WebAppInfo;

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
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Type\InlineKeyboardButton;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;

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
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Type\InputFile;

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
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Type\InputMediaPhoto;

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
use Luzrain\TelegramBotApi\Client;use Luzrain\TelegramBotApi\Type\Message;use Luzrain\TelegramBotApi\Type\Update;

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
