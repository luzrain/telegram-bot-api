<?php

declare(strict_types=1);

namespace TelegramBot\Api;

use TelegramBot\Api\Exceptions\TelegramMethodNotExistException;
use TelegramBot\Api\Types\BotCommand;
use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\ChatAdministratorRights;
use TelegramBot\Api\Types\ChatInviteLink;
use TelegramBot\Api\Types\ChatMember;
use TelegramBot\Api\Types\File;
use TelegramBot\Api\Types\Games\GameHighScore;
use TelegramBot\Api\Types\Inline\SentWebAppMessage;
use TelegramBot\Api\Types\MenuButton;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\MessageId;
use TelegramBot\Api\Types\Poll;
use TelegramBot\Api\Types\Stickers\StickerSet;
use TelegramBot\Api\Types\Update;
use TelegramBot\Api\Types\User;
use TelegramBot\Api\Types\UserProfilePhotos;
use TelegramBot\Api\Types\WebhookInfo;

/**
 * See available methods and its parameters on documentation page
 * @see https://core.telegram.org/bots/api#available-methods
 *
 * @method Update[] getUpdates()
 * @method bool setWebhook()
 * @method bool deleteWebhook()
 * @method WebhookInfo getWebhookInfo()
 * @method User getMe()
 * @method bool logOut()
 * @method bool close()
 * @method Message sendMessage()
 * @method Message forwardMessage()
 * @method MessageId copyMessage()
 * @method Message sendPhoto()
 * @method Message sendAudio()
 * @method Message sendDocument()
 * @method Message sendVideo()
 * @method Message sendAnimation()
 * @method Message sendVoice()
 * @method Message sendVideoNote()
 * @method Message[] sendMediaGroup()
 * @method Message sendLocation()
 * @method Message|bool editMessageLiveLocation()
 * @method Message|bool stopMessageLiveLocation()
 * @method Message sendVenue()
 * @method Message sendContact()
 * @method Message sendPoll()
 * @method Message sendDice()
 * @method bool sendChatAction()
 * @method UserProfilePhotos getUserProfilePhotos()
 * @method File getFile()
 * @method bool banChatMember()
 * @method bool unbanChatMember()
 * @method bool restrictChatMember()
 * @method bool promoteChatMember()
 * @method bool setChatAdministratorCustomTitle()
 * @method bool banChatSenderChat()
 * @method bool unbanChatSenderChat()
 * @method bool setChatPermissions()
 * @method string exportChatInviteLink()
 * @method ChatInviteLink createChatInviteLink()
 * @method ChatInviteLink editChatInviteLink()
 * @method ChatInviteLink revokeChatInviteLink()
 * @method bool approveChatJoinRequest()
 * @method bool declineChatJoinRequest()
 * @method bool setChatPhoto()
 * @method bool deleteChatPhoto()
 * @method bool setChatTitle()
 * @method bool setChatDescription()
 * @method bool pinChatMessage()
 * @method bool unpinChatMessage()
 * @method bool unpinAllChatMessages()
 * @method bool leaveChat()
 * @method Chat getChat()
 * @method ChatMember[] getChatAdministrators()
 * @method int getChatMemberCount()
 * @method ChatMember getChatMember()
 * @method bool setChatStickerSet()
 * @method bool deleteChatStickerSet()
 * @method bool answerCallbackQuery()
 * @method bool setMyCommands()
 * @method bool deleteMyCommands()
 * @method BotCommand[] getMyCommands()
 * @method bool setChatMenuButton()
 * @method MenuButton getChatMenuButton()
 * @method bool setMyDefaultAdministratorRights()
 * @method ChatAdministratorRights getMyDefaultAdminist()
 * @method Message|bool editMessageText()
 * @method Message|bool editMessageCaption()
 * @method Message|bool editMessageMedia()
 * @method Message|bool editMessageReplyMarkup()
 * @method Poll stopPoll()
 * @method bool deleteMessage()
 * @method Message sendSticker()
 * @method StickerSet getStickerSet()
 * @method File uploadStickerFile()
 * @method bool createNewStickerSet()
 * @method bool addStickerToSet()
 * @method bool setStickerPositionInSet()
 * @method bool deleteStickerFromSet()
 * @method bool setStickerSetThumb()
 * @method bool answerInlineQuery()
 * @method SentWebAppMessage answerWebAppQuery()
 * @method Message sendInvoice()
 * @method bool answerShippingQuery()
 * @method bool answerPreCheckoutQuery()
 * @method bool setPassportDataErrors()
 * @method Message sendGame()
 * @method Message|bool setGameScore()
 * @method GameHighScore[] getGameHighScores()
 */
trait Methods
{
    /**
     * @throws TelegramMethodNotExistException
     */
    private function getMethodObject(string $methodName, array $arguments): BaseMethod
    {
        $methodClass = __NAMESPACE__ . '\\Methods\\' . ucfirst($methodName);

        if (class_exists($methodClass)) {
            return new $methodClass(...$arguments);
        }

        throw new TelegramMethodNotExistException($methodName);
    }
}
