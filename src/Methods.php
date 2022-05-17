<?php

declare(strict_types=1);

namespace TelegramBot\Api;

use TelegramBot\Api\Exceptions\TelegramMethodNotExistException;

/**
 * See available methods and its parameters on documentation page
 * @see https://core.telegram.org/bots/api#available-methods
 *
 * @method getUpdates()
 * @method setWebhook()
 * @method deleteWebhook()
 * @method getWebhookInfo()
 * @method getMe()
 * @method logOut()
 * @method close()
 * @method sendMessage()
 * @method forwardMessage()
 * @method copyMessage()
 * @method sendPhoto()
 * @method sendAudio()
 * @method sendDocument()
 * @method sendVideo()
 * @method sendAnimation()
 * @method sendVoice()
 * @method sendVideoNote()
 * @method sendMediaGroup()
 * @method sendLocation()
 * @method editMessageLiveLocation()
 * @method stopMessageLiveLocation()
 * @method sendVenue()
 * @method sendContact()
 * @method sendPoll()
 * @method sendDice()
 * @method sendChatAction()
 * @method getUserProfilePhotos()
 * @method getFile()
 * @method banChatMember()
 * @method unbanChatMember()
 * @method restrictChatMember()
 * @method promoteChatMember()
 * @method setChatAdministratorCustomTitle()
 * @method banChatSenderChat()
 * @method unbanChatSenderChat()
 * @method setChatPermissions()
 * @method exportChatInviteLink()
 * @method createChatInviteLink()
 * @method editChatInviteLink()
 * @method revokeChatInviteLink()
 * @method approveChatJoinRequest()
 * @method declineChatJoinRequest()
 * @method setChatPhoto()
 * @method deleteChatPhoto()
 * @method setChatTitle()
 * @method setChatDescription()
 * @method pinChatMessage()
 * @method unpinChatMessage()
 * @method unpinAllChatMessages()
 * @method leaveChat()
 * @method getChat()
 * @method getChatAdministrators()
 * @method getChatMemberCount()
 * @method getChatMember()
 * @method setChatStickerSet()
 * @method deleteChatStickerSet()
 * @method answerCallbackQuery()
 * @method setMyCommands()
 * @method deleteMyCommands()
 * @method getMyCommands()
 * @method setChatMenuButton()
 * @method getChatMenuButton()
 * @method setMyDefaultAdministratorRights()
 * @method getMyDefaultAdminist()
 * @method editMessageText()
 * @method editMessageCaption()
 * @method editMessageMedia()
 * @method editMessageReplyMarkup()
 * @method stopPoll()
 * @method deleteMessage()
 * @method sendSticker()
 * @method getStickerSet()
 * @method uploadStickerFile()
 * @method createNewStickerSet()
 * @method addStickerToSet()
 * @method setStickerPositionInSet()
 * @method deleteStickerFromSet()
 * @method setStickerSetThumb()
 * @method answerInlineQuery()
 * @method answerWebAppQuery()
 * @method sendInvoice()
 * @method answerShippingQuery()
 * @method answerPreCheckoutQuery()
 * @method setPassportDataErrors()
 * @method sendGame()
 * @method setGameScore()
 * @method getGameHighScores()
 */
trait Methods
{
    /**
     * @param string $methodName
     * @param array $arguments
     * @return BaseMethod
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
