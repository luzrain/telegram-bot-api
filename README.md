
# PHP Telegram Bot Api

[![Bot Api Version](https://img.shields.io/badge/Bot%20API-6.0-0088cc.svg?style=flat)](https://core.telegram.org/bots/api)
[![PHP Version](https://img.shields.io/badge/PHP-%3E=8.0.0-777bb3.svg?style=flat)](https://www.php.net/releases/8.0/)
[![Software License](https://img.shields.io/badge/License-MIT-brightgreen.svg?style=flat)](LICENSE.md)

An extended native php wrapper for [Telegram Bot API](https://core.telegram.org/bots/api). Supports all methods and types of responses.

## Bots: An introduction for developers
>Bots are third-party applications that run inside Telegram. Users can interact with bots by sending them messages, commands and [inline requests](https://core.telegram.org/bots#inline-mode). You control your bots using HTTPS requests to Telegram's [bot API](https://core.telegram.org/bots/api).
>
>The [full API reference](https://core.telegram.org/bots/api) for developers is available [here](https://core.telegram.org/bots/api).


## Installation

Via Composer

``` bash
$ composer require telegram-bot/api
```

## API Wrapper

#### Send message
``` php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\SendMessage;

$bot = new BotApi('BOT_API_TOKEN');

$request = new SendMessage(
    chatId: 123456789,
    text: 'Example text',
);

$response = $bot->call($request);
```

#### Send message with reply keyboard
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\SendMessage;
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

$request = new SendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $replyKeyboard,
);

$response = $bot->call($request);
```

#### Send message with inline keyboard
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\SendMessage;
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

$request = new SendMessage(
    chatId: 123456789,
    text: 'Example text',
    replyMarkup: $inlineKeyboard ,
);

$response = $bot->call($request);
```

#### Send photo/video/document
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\SendPhoto;
use TelegramBot\Api\Types\InputFile;

$bot = new BotApi('BOT_API_TOKEN');

// Upload image from local filesystem
$request = new SendPhoto(
    chatId: 123456789,
    photo: InputFile::create('/home/user/img/15311661465960.jpg'),
);

// Send image from the Internet
$request = new SendPhoto(
    chatId: 123456789,
    photo: 'https://avatars3.githubusercontent.com/u/9335727',
);

// Upload Document
$request = new SendDocument(
    chatId: 123456789,
    document: InputFile::create('/home/user/files/file.zip'),
    thumb: InputFile::create('/home/user/img/thumb.jpg'),
    caption: 'Test file',
);

/**
 * You can also use this command classes:
 * SendPhoto, SendAudio, SendDocument, SendVideo, SendAnimation, SendVoice, SendVideoNote
 */

$response = $bot->call($request);
```

#### Send media group
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\SendMediaGroup;
use TelegramBot\Api\Types\InputFile;
use TelegramBot\Api\Types\InputMediaPhoto;

$bot = new BotApi('BOT_API_TOKEN');

$request = new SendMediaGroup(
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

$response = $bot->call($request);
```

#### Client

```php
use TelegramBot\Api\Client;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Methods\SendMessage;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\Update;

$client = new Client();

// Handle any type of update
$client->update(function(Update $update) {
    // update received
});

// Handle /ping command
$client->command('/ping', function(Message $message) {
    // Be aware that your cannot sent methods with uploading local files from here, use BotApi instead.
    return new SendMessage(
        chatId: $message->getChat()->getId(),
        text: 'pong!',
    );
});

// Handle text messages
$client->message(function(Message $message) {
    return new SendMessage(
        chatId: $message->getChat()->getId(),
        text: 'Your message: ' . $message->getText(),
    );
});

// You can write you custom handlers by implementing Event base class
//$action = function() {};
//$event = new CostomEvent($action);
//$client->on($event);

$client->run();
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Ilya Gusev](https://github.com/iGusev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
