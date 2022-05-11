
# PHP Telegram Bot Api

[![Latest Version on Packagist](https://img.shields.io/packagist/v/telegram-bot/api.svg?style=flat-square)](https://packagist.org/packages/telegram-bot/api)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/TelegramBot/Api/master.svg?style=flat-square)](https://travis-ci.org/TelegramBot/Api)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/telegrambot/api.svg?style=flat-square)](https://scrutinizer-ci.com/g/telegrambot/api/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/telegrambot/api.svg?style=flat-square)](https://scrutinizer-ci.com/g/telegrambot/api)
[![Total Downloads](https://img.shields.io/packagist/dt/telegram-bot/api.svg?style=flat-square)](https://packagist.org/packages/telegram-bot/api)

An extended native php wrapper for [Telegram Bot API](https://core.telegram.org/bots/api) without requirements. Supports all methods and types of responses.

## Bots: An introduction for developers
>Bots are special Telegram accounts designed to handle messages automatically. Users can interact with bots by sending them command messages in private or group chats.

>You control your bots using HTTPS requests to [bot API](https://core.telegram.org/bots/api).

>The Bot API is an HTTP-based interface created for developers keen on building bots for Telegram.
To learn how to create and set up a bot, please consult [Introduction to Bots](https://core.telegram.org/bots) and [Bot FAQ](https://core.telegram.org/bots/faq).

## Installation

Via Composer

``` bash
$ composer require telegram-bot/api
```

## Usage

See example @TODO

### API Wrapper

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
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\KeyboardButton;
use TelegramBot\Api\Types\KeyboardButtonPollType;
use TelegramBot\Api\Types\WebAppInfo;
use TelegramBot\Api\Methods\SendMessage;

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
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\InlineKeyboardButton;
use TelegramBot\Api\Methods\SendMessage;

$bot = new BotApi('BOT_API_TOKEN');

$inlineKeyboard = InlineKeyboardMarkup::create()->addButtons(
    InlineKeyboardButton::create(text: 'Url button', url: 'https://google.com'),
    InlineKeyboardButton::create(text: 'Callback button', callbackData: 'callback_data'),
    InlineKeyboardMarkup::break(),
    InlineKeyboardButton::create(text: 'Iinline query', switchInlineQueryCurrentChat: 'test'),
);

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

$request = new SendPhoto(
    chatId: 123456789,
    photo: InputFile::create('/home/user/img/test.png'),
);

$response = $bot->call($request);
```

#### Send media group
```php
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\SendMediaGroup;
use TelegramBot\Api\Types\InputMediaPhoto;
use TelegramBot\Api\Types\InputFile;

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
require_once "vendor/autoload.php";

try {
    $bot = new \TelegramBot\Api\Client('YOUR_BOT_API_TOKEN');
    // or initialize with botan.io tracker api key
    // $bot = new \TelegramBot\Api\Client('YOUR_BOT_API_TOKEN', 'YOUR_BOTAN_TRACKER_API_KEY');
    

    //Handle /ping command
    $bot->command('ping', function ($message) use ($bot) {
        $bot->sendMessage($message->getChat()->getId(), 'pong!');
    });
    
    //Handle text messages
    $bot->on(function (\TelegramBot\Api\Types\Update $update) use ($bot) {
        $message = $update->getMessage();
        $id = $message->getChat()->getId();
        $bot->sendMessage($id, 'Your message: ' . $message->getText());
    }, function () {
        return true;
    });
    
    $bot->run();

} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mail@igusev.ru instead of using the issue tracker.

## Credits

- [Ilya Gusev](https://github.com/iGusev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
