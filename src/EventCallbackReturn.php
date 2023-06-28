<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

enum EventCallbackReturn
{
    // Return STOP from callback for prevents further event propagation.
    case STOP;

    // Return CONTINUE if you want to continue handling event by other handlers.
    case CONTINUE;
}
