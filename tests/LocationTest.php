<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\Location;

class LocationTest extends TestCase
{
    public function testGetLatitude()
    {
        $location = new Location();
        $location->setLatitude(55.585827);
        $this->assertSame(55.585827, $location->getLatitude());
    }

    public function testGetLongtitude()
    {
        $location = new Location();
        $location->setLongitude(37.675309);
        $this->assertSame(37.675309, $location->getLongitude());
    }

    public function testGetHorizontalAccuracy()
    {
        $location = new Location();
        $location->setHorizontalAccuracy(20.5);
        $this->assertSame(20.5, $location->getHorizontalAccuracy());
    }

    public function testGetLivePeriod()
    {
        $location = new Location();
        $location->setLivePeriod(300);
        $this->assertSame(300, $location->getLivePeriod());
    }

    public function testGetHeading()
    {
        $location = new Location();
        $location->setHeading(100);
        $this->assertSame(100, $location->getHeading());
    }

    public function testGetProximityAlertRadius()
    {
        $location = new Location();
        $location->setProximityAlertRadius(100);
        $this->assertSame(100, $location->getProximityAlertRadius());
    }

    public function testFromResponse()
    {
        $location = Location::fromResponse([
                'latitude' => 55.585827,
                'longitude' => 37.675309,
                'horizontal_accuracy' => 20.5,
                'live_period' => 300,
                'heading' => 100,
                'proximity_alert_radius' => 15
        ]);

        $this->assertInstanceOf(Location::class, $location);
        $this->assertSame(55.585827, $location->getLatitude());
        $this->assertSame(37.675309, $location->getLongitude());
        $this->assertSame(20.5, $location->getHorizontalAccuracy());
        $this->assertSame(300, $location->getLivePeriod());
        $this->assertSame(100, $location->getHeading());
        $this->assertSame(15, $location->getProximityAlertRadius());
    }

    public function testSetHorizontalAccuracyException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Location();
        $item->setHorizontalAccuracy('s');
    }

    public function testSetLatitudeException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Location();
        $item->setLatitude('s');
    }

    public function testSetLongitudeException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Location();
        $item->setLongitude('s');
    }
}
