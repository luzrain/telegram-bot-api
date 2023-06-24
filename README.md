
# PHP Wrapper for Telegram Bot API

[![Bot Api 6.7](https://img.shields.io/badge/Bot%20API-6.7-0088cc.svg?style=flat)](https://core.telegram.org/bots/api-changelog#april-21-2023)
[![PHP ^8.1](https://img.shields.io/badge/PHP-^8.1-777bb3.svg?style=flat)](https://www.php.net/releases/8.1/en.php)
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
```php
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Method\SendMessage;

$bot = new BotApi('BOT_API_TOKEN');

$response = $bot->call(new SendMessage(
    chatId: 123456789,
    text: 'Example text',
));
```

#### Send message with reply keyboard

```php
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Type\KeyboardButton;
use Luzrain\TelegramBotApi\Type\KeyboardButtonPollType;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\WebAppInfo;
use Luzrain\TelegramBotApi\Method\SendMessage;

$bot = new BotApi('BOT_API_TOKEN');

$replyKeyboard = ReplyKeyboardMarkup::create(oneTimeKeyboard: true, resizeKeyboard: true)->addButtons(
    KeyboardButton::create(text: 'Button 1'),
    KeyboardButton::create(text: 'Button 2'),
    ReplyKeyboardMarkup::break(),
    KeyboardButton::create(text: 'Web App', webApp: WebAppInfo::create('https://github.com/')),
    KeyboardButton::create(text: 'Create Poll', requestPoll: KeyboardButtonPollType::create()),
);

$response = $bot->call(new SendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $replyKeyboard,
));
```

#### Send message with inline keyboard

```php
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Type\InlineKeyboardButton;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;
use Luzrain\TelegramBotApi\Method\SendMessage;

$bot = new BotApi('BOT_API_TOKEN');

$inlineKeyboard = InlineKeyboardMarkup::create()->addButtons(
    InlineKeyboardButton::create(text: 'Url button', url: 'https://google.com'),
    InlineKeyboardButton::create(text: 'Callback button', callbackData: 'callback_data'),
    InlineKeyboardMarkup::break(),
    InlineKeyboardButton::create(text: 'Iinline query', switchInlineQueryCurrentChat: 'test'),
);

// For keyboard remove
$inlineKeyboard = ReplyKeyboardRemove::create();

$response = $bot->call(new SendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $inlineKeyboard ,
));
```

#### Send photo/video/document

```php
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Method\SendPhoto;
use Luzrain\TelegramBotApi\Method\SendDocument;

$bot = new BotApi('BOT_API_TOKEN');

// Upload image from local filesystem
$response = $bot->call(new SendPhoto(
    chatId: 123456789,
    photo: InputFile::create('/home/user/img/15311661465960.jpg'),
));

// Send image from the Internet
$response = $bot->call(new SendPhoto(
    chatId: 123456789,
    photo: 'https://avatars3.githubusercontent.com/u/9335727',
));

// Upload Document
$response = $bot->call(new SendDocument(
    chatId: 123456789,
    document: InputFile::create('/home/user/files/file.zip'),
    thumb: InputFile::create('/home/user/img/thumb.jpg'),
    caption: 'Test file',
));

/**
 * You can also use this methods:
 * SendPhoto, SendAudio, SendDocument, SendVideo, SendAnimation, SendVoice, SendVideoNote
 */
```

#### Send media group

```php
use Luzrain\TelegramBotApi\BotApi;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Type\InputMediaPhoto;
use Luzrain\TelegramBotApi\Method\SendMediaGroup;

$bot = new BotApi('BOT_API_TOKEN');

$response = $bot->call(new SendMediaGroup(
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
