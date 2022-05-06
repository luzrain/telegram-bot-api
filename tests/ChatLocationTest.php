<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatLocation;
use TelegramBot\Api\Types\Location;

class ChatLocationTest extends TestCase
{
    public function testGetLocation()
    {
        $chatLocation = new ChatLocation();

        $location = new Location();
        $location->setLatitude(55.585827);
        $location->setLongitude(37.675309);

        $chatLocation->setLocation($location);

        $this->assertSame($location, $chatLocation->getLocation());
    }

    public function testGetAddress()
    {
        $chatLocation = new ChatLocation();
        $chatLocation->setAddress('Wall St. 123');

        $this->assertSame('Wall St. 123', $chatLocation->getAddress());
    }

    public function testFromResponse()
    {
        $chatLocation = ChatLocation::fromResponse(
            [
                'location' => [
                    'latitude' => 55.585827,
                    'longitude' => 37.675309,
                ],
                'address' => 'Wall St. 123'
            ]
        );

        $this->assertInstanceOf(ChatLocation::class, $chatLocation);
        $this->assertSame('Wall St. 123', $chatLocation->getAddress());
    }
}
