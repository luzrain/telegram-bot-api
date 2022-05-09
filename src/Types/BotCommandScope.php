<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 *
 * @see BotCommandScopeDefault
 * @see BotCommandScopeAllPrivateChats
 * @see BotCommandScopeAllGroupChats
 * @see BotCommandScopeAllChatAdministrators
 * @see BotCommandScopeChat
 * @see BotCommandScopeChatAdministrators
 * @see BotCommandScopeChatMember
 */
class BotCommandScope extends BaseType implements TypeInterface
{
}
