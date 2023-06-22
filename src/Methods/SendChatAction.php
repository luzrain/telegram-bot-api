<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method when you need to tell the user that something is happening on the bot's side.
 * The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status).
 * Returns True on success.
 */
final class SendChatAction extends BaseMethod
{
    public const TYPING_ACTION = 'typing';
    public const UPLOAD_PHOTO_ACTION = 'upload_photo';
    public const RECORD_VIDEO_ACTION = 'record_video';
    public const UPLOAD_VIDEO_ACTION = 'upload_video';
    public const RECORD_VOICE_ACTION = 'record_voice';
    public const UPLOAD_VOICE_ACTION = 'upload_voice';
    public const UPLOAD_DOCUMENT_ACTION = 'upload_document';
    public const CHOOSE_STICKER_ACTION = 'choose_sticker';
    public const FIND_LOCATION_ACTION = 'find_location';
    public const RECORD_VIDEO_NOTE_ACTION = 'record_video_note';
    public const UPLOAD_VIDEO_NOTE_ACTION = 'upload_video_note';

    protected static string $methodName = 'sendChatAction';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Type of action to broadcast. Choose one, depending on what the user is about to receive:
         * typing for text messages,
         * upload_photo for photos,
         * record_video or upload_video for videos,
         * record_voice or upload_voice for voice notes,
         * upload_document for general files,
         * choose_sticker for stickers,
         * find_location for location data,
         * record_video_note or upload_video_note for video notes.
         */
        protected string $action,

        /**
         * Unique identifier for the target message thread; supergroups only
         */
        protected string|null $messageThreadId = null,
    ) {
    }
}
