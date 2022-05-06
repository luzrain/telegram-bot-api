<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Contact;

class ContactTest extends TestCase
{
    public function testGetPhoneNumber(): void
    {
        $contact = new Contact();
        $contact->setPhoneNumber('123456');
        $this->assertSame('123456', $contact->getPhoneNumber());
    }

    public function testGetFirstName(): void
    {
        $contact = new Contact();
        $contact->setFirstName('Ilya');
        $this->assertSame('Ilya', $contact->getFirstName());
    }

    public function testGetLastName(): void
    {
        $contact = new Contact();
        $contact->setLastName('Gusev');
        $this->assertSame('Gusev', $contact->getLastName());
    }

    public function testGetUserId(): void
    {
        $contact = new Contact();
        $contact->setUserId('iGusev');
        $this->assertSame('iGusev', $contact->getUserId());
    }

    public function testGetVCard(): void
    {
        $contact = new Contact();
        $contact->setVCard('testVCard');
        $this->assertSame('testVCard', $contact->getVCard());
    }

    public function testFromResponse(): void
    {
        $contact = Contact::fromResponse([
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'phone_number' => '123456',
            'user_id' => 'iGusev',
        ]);

        $this->assertInstanceOf(Contact::class, $contact);
        $this->assertSame('123456', $contact->getPhoneNumber());
        $this->assertSame('Ilya', $contact->getFirstName());
        $this->assertSame('Gusev', $contact->getLastName());
        $this->assertSame('iGusev', $contact->getUserId());
    }
}
