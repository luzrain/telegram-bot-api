<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
class ProximityAlertTriggered extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'traveler',
        'watcher',
        'distance',
    ];

    protected static array $map = [
        'traveler' => User::class,
        'watcher' => User::class,
        'distance' => true,
    ];

    /**
     * User that triggered the alert
     */
    protected User $traveler;

    /**
     * User that set the alert
     */
    protected User $watcher;

    /**
     * The distance between the users
     */
    protected int $distance;

    public function getTraveler(): User
    {
        return $this->traveler;
    }

    public function getWatcher(): User
    {
        return $this->watcher;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
