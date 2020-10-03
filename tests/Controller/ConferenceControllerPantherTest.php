<?php

namespace Controller;

use Symfony\Component\Panther\PantherTestCase;

class ConferenceControllerPantherTest extends PantherTestCase
{
    public function testIndex()
    {
        $client = static::createPantherClient([
            'external_base_uri' => $_SERVER['SYMFONY_DEFAULT_ROUTE_URL']
        ]);

        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello World');
    }
}